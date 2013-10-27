<?php


/**
 * This class defines the structure of the 'repuesto' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 08/28/13 00:53:35
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class RepuestoTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.RepuestoTableMap';

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
		$this->setName('repuesto');
		$this->setPhpName('Repuesto');
		$this->setClassname('Repuesto');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('REP_CODIGO', 'RepCodigo', 'INTEGER', true, 11, null);
		$this->addColumn('REP_NUMERO', 'RepNumero', 'VARCHAR', false, 20, null);
		$this->addColumn('REP_NOMBRE', 'RepNombre', 'VARCHAR', false, 200, null);
		$this->addColumn('REP_CANTIDAD', 'RepCantidad', 'INTEGER', false, 11, null);
		$this->addColumn('REP_PERIODICIDAD', 'RepPeriodicidad', 'INTEGER', false, 11, null);
		$this->addColumn('REP_FECHA_REGISTRO_SISTEMA', 'RepFechaRegistroSistema', 'TIMESTAMP', false, null, null);
		$this->addForeignKey('REP_USU_CREA', 'RepUsuCrea', 'INTEGER', 'usuario', 'USU_CODIGO', false, 11, null);
		$this->addForeignKey('REP_USU_ACTUALIZA', 'RepUsuActualiza', 'INTEGER', 'usuario', 'USU_CODIGO', false, 11, null);
		$this->addColumn('REP_FECHA_ACTUALIZACION', 'RepFechaActualizacion', 'TIMESTAMP', false, null, null);
		$this->addColumn('REP_ELIMINADO', 'RepEliminado', 'SMALLINT', false, 6, null);
		$this->addColumn('REP_CAUSA_ELIMINACION', 'RepCausaEliminacion', 'VARCHAR', false, 250, null);
		$this->addColumn('REP_CAUSA_ACTUALIZACION', 'RepCausaActualizacion', 'VARCHAR', false, 250, null);
		$this->addForeignKey('REP_CAT_CODIGO', 'RepCatCodigo', 'INTEGER', 'categoria_equipo', 'CAT_CODIGO', false, 11, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('UsuarioRelatedByRepUsuCrea', 'Usuario', RelationMap::MANY_TO_ONE, array('rep_usu_crea' => 'usu_codigo', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('UsuarioRelatedByRepUsuActualiza', 'Usuario', RelationMap::MANY_TO_ONE, array('rep_usu_actualiza' => 'usu_codigo', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('CategoriaEquipo', 'CategoriaEquipo', RelationMap::MANY_TO_ONE, array('rep_cat_codigo' => 'cat_codigo', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('RegistroRepMaquina', 'RegistroRepMaquina', RelationMap::ONE_TO_MANY, array('rep_codigo' => 'rrm_rep_codigo', ), 'SET NULL', 'SET NULL');
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

} // RepuestoTableMap
