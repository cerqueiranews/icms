<?php

class m120923_193958_iniciando_base extends CDbMigration
{
	public $tabelasCriadas = array();
	
	public function safeUp()
	{
		$base = array();
		$nomeTabela = 'tipos_usuario';
		$base[$nomeTabela] = array();
		$base[$nomeTabela][] = 'id int auto_increment not null primary key';
		$base[$nomeTabela][] = 'nome varchar(255)';
		$base[$nomeTabela][] = 'descricao text';

		$nomeTabela = 'usuarios';
		$base[$nomeTabela] = array();
		$base[$nomeTabela][] = 'id int auto_increment not null primary key';
		$base[$nomeTabela][] = 'nome varchar(255)';
		$base[$nomeTabela][] = 'email varchar(100) not null';
		$base[$nomeTabela][] = 'login varchar(32) not null';
		$base[$nomeTabela][] = 'senha varchar(32) not null';
		$base[$nomeTabela][] = 'id_tipo_usuario int not null';
		
		$nomeTabela = 'categorias';
		$base[$nomeTabela] = array();
		$base[$nomeTabela][] = 'id int auto_increment not null primary key';
		$base[$nomeTabela][] = 'nome varchar(255) not null';
		$base[$nomeTabela][] = 'descricao text';
		
		$nomeTabela = 'materias';
		$base[$nomeTabela] = array();
		$base[$nomeTabela][] = 'id int auto_increment not null primary key';
		$base[$nomeTabela][] = 'titulo varchar(255) not null';
		$base[$nomeTabela][] = 'subtitulo varchar(255)';
		$base[$nomeTabela][] = 'data datetime';
		$base[$nomeTabela][] = 'link varchar(255)';
		$base[$nomeTabela][] = 'texto text not null';
		$base[$nomeTabela][] = 'id_categoria int not null';
		$base[$nomeTabela][] = 'id_usuario int not null';
		
		try
		{
			foreach ($base as $tabela => $campos)
			{	
				$this->createTable($tabela, $campos);
				$this->tabelasCriadas[] = $tabela;
			}


			$this->createIndex('idx_login', 'usuarios', 'login', true);
			$this->createIndex('idx_email', 'usuarios', 'email', true);

			$this->createIndex('idx_categoria', 'categorias', 'nome', true);

			$this->addForeignKey('fk_tipo_usuario', 'usuarios', 'id_tipo_usuario', 'tipos_usuario', 'id', 'CASCADE', 'RESTRICT');
			$this->addForeignKey('fk_usuario', 'materias', 'id_usuario', 'usuarios', 'id', 'CASCADE', 'RESTRICT');
			$this->addForeignKey('fk_categoria', 'materias', 'id_categoria', 'categorias', 'id', 'CASCADE', 'RESTRICT');

			$this->insert('tipos_usuario',array('id'=>1, 'nome'=>'Administrador'));
			$this->insert('tipos_usuario',array('id'=>2, 'nome'=>'Editor'));
			$this->insert('tipos_usuario',array('id'=>3, 'nome'=>'Revisor'));

			$this->insert('usuarios',array('nome'=>'Administrador','login'=>md5('administrador'),'senha'=>md5('m0g4m9ms'),'id_tipo_usuario'=>1));
			
			$this->insert('categorias',array('nome'=>'Notícias'));
			$this->insert('categorias',array('nome'=>'Eventos'));
			$this->insert('categorias',array('nome'=>'Publicações'));
			$this->insert('categorias',array('nome'=>'Extramuros'));
			
			return true;
		}
		catch (Exception $e)
		{
			echo '\n';
			echo $e->getMessage();
			echo '\n';
			echo $e->getTrace();
			echo '\n';
			$this->safeDown();
			return false;
		}
	}

	public function safeDown()
	{

		$tabelas = array();
		
		if(empty($this->tabelasCriadas))
		{
			$tabelas[] = 'tipos_usuario';
			$tabelas[] = 'usuarios';
			$tabelas[] = 'categorias';
			$tabelas[] = 'materias';
		}
		else
		{
			$tabelas = $this->tabelasCriadas;
		}
		
		
		foreach ($tabelas as $tabela) 
		{
			switch ($tabela)
			{
				case 'usuarios':
					if(in_array('materias', $tabelas))
						$this->dropForeignKey('fk_usuario', 'materias');
					break;
				case 'categorias':
					if(in_array('materias', $tabelas))
						$this->dropForeignKey('fk_categoria', 'materias');
					break;
				case 'tipos_usuario':
					if(in_array('usuarios', $tabelas))
						$this->dropForeignKey('fk_tipo_usuario', 'usuarios');
					break;
			}
			$this->dropTable($tabela);
		}
		
		return true;
	}
}