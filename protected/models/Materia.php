<?php

/**
 * This is the model class for table "materias".
 *
 * The followings are the available columns in table 'materias':
 * @property integer $id
 * @property string $titulo
 * @property string $subtitulo
 * @property string $data
 * @property string $link
 * @property string $texto
 * @property integer $id_categoria
 * @property integer $id_usuario
 *
 * The followings are the available model relations:
 * @property Usuarios $idUsuario
 */
class Materia extends CActiveRecord
{
	/**
	 *
	 * @var string
	 * @soap 
	 */
	public $titulo;
	/**
	 *
	 * @var string
	 * @soap 
	 */
	public $subtitulo;
	/**
	 *
	 * @var date
	 * @soap 
	 */
	public $data;
	/**
	 *
	 * @var string
	 * @soap 
	 */
	public $texto;
	/**
	 *
	 * @var string
	 * @soap 
	 */
	public $link;
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Materia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'materias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_usuario', 'required'),
			array('id_usuario, id_categoria', 'numerical', 'integerOnly'=>true),
			array('titulo, subtitulo, link', 'length', 'max'=>255),
			array('data, texto', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, titulo, subtitulo, data, link, texto, id_usuario, id_categoria', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'usuario' => array(self::BELONGS_TO, 'Usuario', 'id_usuario'),
			'categoria' => array(self::BELONGS_TO, 'Categoria', 'id_categoria'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => Yii::t('sistema', 'Id'),
			'titulo' => Yii::t('sistema', 'Título'),
			'subtitulo' => Yii::t('sistema', 'Subtítulo'),
			'data' => Yii::t('sistema', 'Data'),
			'link' => Yii::t('sistema', 'Link'),
			'texto' => Yii::t('sistema', 'Texto'),
			'id_usuario' => Yii::t('sistema', 'Autor'),
			'id_categoria' => Yii::t('sistema', 'Categoria'),
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('subtitulo',$this->subtitulo,true);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('link',$this->link,true);
		$criteria->compare('texto',$this->texto,true);
		$criteria->compare('id_usuario',$this->id_usuario);
		$criteria->compare('id_categoria',$this->categoria);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function noticias()
	{
		$criteria = new CDbCriteria();
		$criteria->compare('id_categoria', Categoria::ID_NOTICIAS);
		
		$this->getDbCriteria()->mergeWith($criteria);
		return $this;
	}
	
	public function eventos()
	{
		$criteria = new CDbCriteria();
		$criteria->compare('id_categoria', Categoria::ID_EVENTOS);
		
		$this->getDbCriteria()->mergeWith($criteria);
		return $this;
	}
	
	public function publicacoes()
	{
		$criteria = new CDbCriteria();
		$criteria->compare('id_categoria', Categoria::ID_PUBLICACOES);
		
		$this->getDbCriteria()->mergeWith($criteria);
		return $this;
	}
	
	public function extramuros()
	{
		$criteria = new CDbCriteria();
		$criteria->compare('id_categoria', Categoria::ID_EXTRAMUROS);
		
		$this->getDbCriteria()->mergeWith($criteria);
		return $this;
	}
	
}