<?php


/**
 * This class defines the structure of the 'metodo' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 08/28/13 00:53:30
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class MetodoTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.MetodoTableMap';

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
		$this->setName('metodo');
		$this->setPhpName('Metodo');
		$this->setClassname('Metodo');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('MET_CODIGO', 'MetCodigo', 'INTEGER', true, 11, null);
		$this->addColumn('MET_NOMBRE', 'MetNombre', 'VARCHAR', false, 200, null);
		$this->addColumn('MET_TIEMPO_ALISTAMIENTO', 'MetTiempoAlistamiento', 'DECIMAL', false, 12, null);
		$this->addColumn('MET_TIEMPO_ACONDICIONAMIENTO', 'MetTiempoAcondicionamiento', 'DECIMAL', false, 12, null);
		$this->addColumn('MET_TIEMPO_ESTABILIZACION', 'MetTiempoEstabilizacion', 'DECIMAL', false, 12, null);
		$this->addColumn('MET_TIEMPO_ESTANDAR', 'MetTiempoEstandar', 'DECIMAL', false, 12, null);
		$this->addColumn('MET_TIEMPO_CORRIDA_SISTEMA', 'MetTiempoCorridaSistema', 'DECIMAL', false, 12, null);
		$this->addColumn('MET_TIEMPO_CORRIDA_CURVAS', 'MetTiempoCorridaCurvas', 'DECIMAL', false, 12, null);
		$this->addColumn('MET_NUM_INYECCION_ESTANDAR_1', 'MetNumInyeccionEstandar1', 'INTEGER', false, 11, null);
		$this->addColumn('MET_NUM_INYECCION_ESTANDAR_2', 'MetNumInyeccionEstandar2', 'INTEGER', false, 11, null);
		$this->addColumn('MET_NUM_INYECCION_ESTANDAR_3', 'MetNumInyeccionEstandar3', 'INTEGER', false, 11, null);
		$this->addColumn('MET_NUM_INYECCION_ESTANDAR_4', 'MetNumInyeccionEstandar4', 'INTEGER', false, 11, null);
		$this->addColumn('MET_NUM_INYECCION_ESTANDAR_5', 'MetNumInyeccionEstandar5', 'INTEGER', false, 11, null);
		$this->addColumn('MET_NUM_INYECCION_ESTANDAR_6', 'MetNumInyeccionEstandar6', 'INTEGER', false, 11, null);
		$this->addColumn('MET_NUM_INYECCION_ESTANDAR_7', 'MetNumInyeccionEstandar7', 'INTEGER', false, 11, null);
		$this->addColumn('MET_NUM_INYECCION_ESTANDAR_8', 'MetNumInyeccionEstandar8', 'INTEGER', false, 11, null);
		$this->addColumn('MET_FECHA_REGISTRO_SISTEMA', 'MetFechaRegistroSistema', 'TIMESTAMP', false, null, null);
		$this->addColumn('MET_NUM_INYEC_X_MU_PRODUCTO', 'MetNumInyecXMuProducto', 'INTEGER', false, 11, null);
		$this->addColumn('MET_NUM_INYEC_X_MU_ESTABILIDAD', 'MetNumInyecXMuEstabilidad', 'INTEGER', false, 11, null);
		$this->addColumn('MET_NUM_INYEC_X_MU_MATERIA_PRI', 'MetNumInyecXMuMateriaPri', 'INTEGER', false, 11, null);
		$this->addColumn('MET_NUM_INYEC_X_MU_PUREZA', 'MetNumInyecXMuPureza', 'INTEGER', false, 11, null);
		$this->addColumn('MET_NUM_INYEC_X_MU_DISOLUCION', 'MetNumInyecXMuDisolucion', 'INTEGER', false, 11, null);
		$this->addColumn('MET_NUM_INYEC_X_MU_UNIFORMIDAD', 'MetNumInyecXMuUniformidad', 'INTEGER', false, 11, null);
		$this->addColumn('MET_NUMERO_INYECCION_ESTANDAR', 'MetNumeroInyeccionEstandar', 'INTEGER', false, 11, null);
		$this->addForeignKey('MET_USU_CREA', 'MetUsuCrea', 'INTEGER', 'usuario', 'USU_CODIGO', false, 11, null);
		$this->addForeignKey('MET_USU_ACTUALIZA', 'MetUsuActualiza', 'INTEGER', 'usuario', 'USU_CODIGO', false, 11, null);
		$this->addColumn('MET_FECHA_ACTUALIZACION', 'MetFechaActualizacion', 'TIMESTAMP', false, null, null);
		$this->addColumn('MET_ELIMINADO', 'MetEliminado', 'SMALLINT', false, 6, null);
		$this->addColumn('MET_CAUSA_ELIMINACION', 'MetCausaEliminacion', 'VARCHAR', false, 250, null);
		$this->addColumn('MET_CAUSA_ACTUALIZACION', 'MetCausaActualizacion', 'VARCHAR', false, 250, null);
		$this->addColumn('MET_TC_PRODUCTO_TERMINADO', 'MetTcProductoTerminado', 'DECIMAL', false, 12, null);
		$this->addColumn('MET_TC_ESTABILIDAD', 'MetTcEstabilidad', 'DECIMAL', false, 12, null);
		$this->addColumn('MET_TC_MATERIA_PRIMA', 'MetTcMateriaPrima', 'DECIMAL', false, 12, null);
		$this->addColumn('MET_TC_PUREZA', 'MetTcPureza', 'DECIMAL', false, 12, null);
		$this->addColumn('MET_TC_DISOLUCION', 'MetTcDisolucion', 'DECIMAL', false, 12, null);
		$this->addColumn('MET_TC_UNIFORMIDAD', 'MetTcUniformidad', 'DECIMAL', false, 12, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('UsuarioRelatedByMetUsuCrea', 'Usuario', RelationMap::MANY_TO_ONE, array('met_usu_crea' => 'usu_codigo', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('UsuarioRelatedByMetUsuActualiza', 'Usuario', RelationMap::MANY_TO_ONE, array('met_usu_actualiza' => 'usu_codigo', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('RegistroUsoMaquina', 'RegistroUsoMaquina', RelationMap::ONE_TO_MANY, array('met_codigo' => 'rum_met_codigo', ), 'RESTRICT', 'RESTRICT');
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

} // MetodoTableMap