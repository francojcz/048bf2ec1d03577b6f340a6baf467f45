<?php


/**
 * This class defines the structure of the 'tipo_identificacion' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 11/28/13 18:49:06
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class TipoIdentificacionTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.TipoIdentificacionTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('tipo_identificacion');
		$this->setPhpName('TipoIdentificacion');
		$this->setClassname('TipoIdentificacion');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('TID_CODIGO', 'TidCodigo', 'INTEGER', true, 11, null);
		$this->addColumn('TID_NOMBRE', 'TidNombre', 'VARCHAR', false, 30, null);
		$this->addColumn('TID_FECHA_REGISTRO_SISTEMA', 'TidFechaRegistroSistema', 'TIMESTAMP', false, null, null);
		$this->addColumn('TID_USU_CREA', 'TidUsuCrea', 'INTEGER', false, 11, null);
		$this->addColumn('TID_USU_ACTUALIZA', 'TidUsuActualiza', 'INTEGER', false, 11, null);
		$this->addColumn('TID_FECHA_ACTUALIZACION', 'TidFechaActualizacion', 'TIMESTAMP', false, null, null);
		$this->addColumn('TID_ELIMINADO', 'TidEliminado', 'SMALLINT', false, 6, null);
		$this->addColumn('TID_CAUSA_ELIMINACION', 'TidCausaEliminacion', 'VARCHAR', false, 250, null);
		$this->addColumn('TID_CAUSA_ACTUALIZACION', 'TidCausaActualizacion', 'VARCHAR', false, 250, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

	/**
	 * 
	 * Gets the list of behaviors registered for this table
	 * 
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'symfony' => array('form' => 'true', 'filter' => 'true', ),
			'symfony_behaviors' => array(),
		);
	} // getBehaviors()

} // TipoIdentificacionTableMap
