<?php

/**
 * Base static class for performing query and update operations on the 'maquina' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 12/15/13 17:27:43
 *
 * @package    lib.model.om
 */
abstract class BaseMaquinaPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'propel';

	/** the table name for this class */
	const TABLE_NAME = 'maquina';

	/** the related Propel class for this table */
	const OM_CLASS = 'Maquina';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'lib.model.Maquina';

	/** the related TableMap class for this table */
	const TM_CLASS = 'MaquinaTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 19;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the MAQ_CODIGO field */
	const MAQ_CODIGO = 'maquina.MAQ_CODIGO';

	/** the column name for the MAQ_EST_CODIGO field */
	const MAQ_EST_CODIGO = 'maquina.MAQ_EST_CODIGO';

	/** the column name for the MAQ_COM_CERTIFICADO field */
	const MAQ_COM_CERTIFICADO = 'maquina.MAQ_COM_CERTIFICADO';

	/** the column name for the MAQ_NOMBRE field */
	const MAQ_NOMBRE = 'maquina.MAQ_NOMBRE';

	/** the column name for the MAQ_MARCA field */
	const MAQ_MARCA = 'maquina.MAQ_MARCA';

	/** the column name for the MAQ_MODELO field */
	const MAQ_MODELO = 'maquina.MAQ_MODELO';

	/** the column name for the MAQ_FECHA_ADQUISICION field */
	const MAQ_FECHA_ADQUISICION = 'maquina.MAQ_FECHA_ADQUISICION';

	/** the column name for the MAQ_FOTO_URL field */
	const MAQ_FOTO_URL = 'maquina.MAQ_FOTO_URL';

	/** the column name for the MAQ_TIEMPO_INYECCION field */
	const MAQ_TIEMPO_INYECCION = 'maquina.MAQ_TIEMPO_INYECCION';

	/** the column name for the MAQ_FECHA_REGISTRO_SISTEMA field */
	const MAQ_FECHA_REGISTRO_SISTEMA = 'maquina.MAQ_FECHA_REGISTRO_SISTEMA';

	/** the column name for the MAQ_CODIGO_INVENTARIO field */
	const MAQ_CODIGO_INVENTARIO = 'maquina.MAQ_CODIGO_INVENTARIO';

	/** the column name for the MAQ_USU_CREA field */
	const MAQ_USU_CREA = 'maquina.MAQ_USU_CREA';

	/** the column name for the MAQ_USU_ACTUALIZA field */
	const MAQ_USU_ACTUALIZA = 'maquina.MAQ_USU_ACTUALIZA';

	/** the column name for the MAQ_FECHA_ACTUALIZACION field */
	const MAQ_FECHA_ACTUALIZACION = 'maquina.MAQ_FECHA_ACTUALIZACION';

	/** the column name for the MAQ_ELIMINADO field */
	const MAQ_ELIMINADO = 'maquina.MAQ_ELIMINADO';

	/** the column name for the MAQ_CAUSA_ELIMINACION field */
	const MAQ_CAUSA_ELIMINACION = 'maquina.MAQ_CAUSA_ELIMINACION';

	/** the column name for the MAQ_CAUSA_ACTUALIZACION field */
	const MAQ_CAUSA_ACTUALIZACION = 'maquina.MAQ_CAUSA_ACTUALIZACION';

	/** the column name for the MAQ_CAT_CODIGO field */
	const MAQ_CAT_CODIGO = 'maquina.MAQ_CAT_CODIGO';

	/** the column name for the MAQ_INDICADORES field */
	const MAQ_INDICADORES = 'maquina.MAQ_INDICADORES';

	/**
	 * An identiy map to hold any loaded instances of Maquina objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Maquina[]
	 */
	public static $instances = array();


	// symfony behavior
	
	/**
	 * Indicates whether the current model includes I18N.
	 */
	const IS_I18N = false;

	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('MaqCodigo', 'MaqEstCodigo', 'MaqComCertificado', 'MaqNombre', 'MaqMarca', 'MaqModelo', 'MaqFechaAdquisicion', 'MaqFotoUrl', 'MaqTiempoInyeccion', 'MaqFechaRegistroSistema', 'MaqCodigoInventario', 'MaqUsuCrea', 'MaqUsuActualiza', 'MaqFechaActualizacion', 'MaqEliminado', 'MaqCausaEliminacion', 'MaqCausaActualizacion', 'MaqCatCodigo', 'MaqIndicadores', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('maqCodigo', 'maqEstCodigo', 'maqComCertificado', 'maqNombre', 'maqMarca', 'maqModelo', 'maqFechaAdquisicion', 'maqFotoUrl', 'maqTiempoInyeccion', 'maqFechaRegistroSistema', 'maqCodigoInventario', 'maqUsuCrea', 'maqUsuActualiza', 'maqFechaActualizacion', 'maqEliminado', 'maqCausaEliminacion', 'maqCausaActualizacion', 'maqCatCodigo', 'maqIndicadores', ),
		BasePeer::TYPE_COLNAME => array (self::MAQ_CODIGO, self::MAQ_EST_CODIGO, self::MAQ_COM_CERTIFICADO, self::MAQ_NOMBRE, self::MAQ_MARCA, self::MAQ_MODELO, self::MAQ_FECHA_ADQUISICION, self::MAQ_FOTO_URL, self::MAQ_TIEMPO_INYECCION, self::MAQ_FECHA_REGISTRO_SISTEMA, self::MAQ_CODIGO_INVENTARIO, self::MAQ_USU_CREA, self::MAQ_USU_ACTUALIZA, self::MAQ_FECHA_ACTUALIZACION, self::MAQ_ELIMINADO, self::MAQ_CAUSA_ELIMINACION, self::MAQ_CAUSA_ACTUALIZACION, self::MAQ_CAT_CODIGO, self::MAQ_INDICADORES, ),
		BasePeer::TYPE_FIELDNAME => array ('maq_codigo', 'maq_est_codigo', 'maq_com_certificado', 'maq_nombre', 'maq_marca', 'maq_modelo', 'maq_fecha_adquisicion', 'maq_foto_url', 'maq_tiempo_inyeccion', 'maq_fecha_registro_sistema', 'maq_codigo_inventario', 'maq_usu_crea', 'maq_usu_actualiza', 'maq_fecha_actualizacion', 'maq_eliminado', 'maq_causa_eliminacion', 'maq_causa_actualizacion', 'maq_cat_codigo', 'maq_indicadores', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('MaqCodigo' => 0, 'MaqEstCodigo' => 1, 'MaqComCertificado' => 2, 'MaqNombre' => 3, 'MaqMarca' => 4, 'MaqModelo' => 5, 'MaqFechaAdquisicion' => 6, 'MaqFotoUrl' => 7, 'MaqTiempoInyeccion' => 8, 'MaqFechaRegistroSistema' => 9, 'MaqCodigoInventario' => 10, 'MaqUsuCrea' => 11, 'MaqUsuActualiza' => 12, 'MaqFechaActualizacion' => 13, 'MaqEliminado' => 14, 'MaqCausaEliminacion' => 15, 'MaqCausaActualizacion' => 16, 'MaqCatCodigo' => 17, 'MaqIndicadores' => 18, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('maqCodigo' => 0, 'maqEstCodigo' => 1, 'maqComCertificado' => 2, 'maqNombre' => 3, 'maqMarca' => 4, 'maqModelo' => 5, 'maqFechaAdquisicion' => 6, 'maqFotoUrl' => 7, 'maqTiempoInyeccion' => 8, 'maqFechaRegistroSistema' => 9, 'maqCodigoInventario' => 10, 'maqUsuCrea' => 11, 'maqUsuActualiza' => 12, 'maqFechaActualizacion' => 13, 'maqEliminado' => 14, 'maqCausaEliminacion' => 15, 'maqCausaActualizacion' => 16, 'maqCatCodigo' => 17, 'maqIndicadores' => 18, ),
		BasePeer::TYPE_COLNAME => array (self::MAQ_CODIGO => 0, self::MAQ_EST_CODIGO => 1, self::MAQ_COM_CERTIFICADO => 2, self::MAQ_NOMBRE => 3, self::MAQ_MARCA => 4, self::MAQ_MODELO => 5, self::MAQ_FECHA_ADQUISICION => 6, self::MAQ_FOTO_URL => 7, self::MAQ_TIEMPO_INYECCION => 8, self::MAQ_FECHA_REGISTRO_SISTEMA => 9, self::MAQ_CODIGO_INVENTARIO => 10, self::MAQ_USU_CREA => 11, self::MAQ_USU_ACTUALIZA => 12, self::MAQ_FECHA_ACTUALIZACION => 13, self::MAQ_ELIMINADO => 14, self::MAQ_CAUSA_ELIMINACION => 15, self::MAQ_CAUSA_ACTUALIZACION => 16, self::MAQ_CAT_CODIGO => 17, self::MAQ_INDICADORES => 18, ),
		BasePeer::TYPE_FIELDNAME => array ('maq_codigo' => 0, 'maq_est_codigo' => 1, 'maq_com_certificado' => 2, 'maq_nombre' => 3, 'maq_marca' => 4, 'maq_modelo' => 5, 'maq_fecha_adquisicion' => 6, 'maq_foto_url' => 7, 'maq_tiempo_inyeccion' => 8, 'maq_fecha_registro_sistema' => 9, 'maq_codigo_inventario' => 10, 'maq_usu_crea' => 11, 'maq_usu_actualiza' => 12, 'maq_fecha_actualizacion' => 13, 'maq_eliminado' => 14, 'maq_causa_eliminacion' => 15, 'maq_causa_actualizacion' => 16, 'maq_cat_codigo' => 17, 'maq_indicadores' => 18, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
	);

	/**
	 * Translates a fieldname to another type
	 *
	 * @param      string $name field name
	 * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @param      string $toType   One of the class type constants
	 * @return     string translated name of the field.
	 * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
	 */
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	/**
	 * Returns an array of field names.
	 *
	 * @param      string $type The type of fieldnames to return:
	 *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     array A list of field names
	 */

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	/**
	 * Convenience method which changes table.column to alias.column.
	 *
	 * Using this method you can maintain SQL abstraction while using column aliases.
	 * <code>
	 *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
	 *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
	 * </code>
	 * @param      string $alias The alias for the current table.
	 * @param      string $column The column name for current table. (i.e. MaquinaPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(MaquinaPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	/**
	 * Add all the columns needed to create a new object.
	 *
	 * Note: any columns that were marked with lazyLoad="true" in the
	 * XML schema will not be added to the select list and only loaded
	 * on demand.
	 *
	 * @param      criteria object containing the columns to add.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function addSelectColumns(Criteria $criteria)
	{
		$criteria->addSelectColumn(MaquinaPeer::MAQ_CODIGO);
		$criteria->addSelectColumn(MaquinaPeer::MAQ_EST_CODIGO);
		$criteria->addSelectColumn(MaquinaPeer::MAQ_COM_CERTIFICADO);
		$criteria->addSelectColumn(MaquinaPeer::MAQ_NOMBRE);
		$criteria->addSelectColumn(MaquinaPeer::MAQ_MARCA);
		$criteria->addSelectColumn(MaquinaPeer::MAQ_MODELO);
		$criteria->addSelectColumn(MaquinaPeer::MAQ_FECHA_ADQUISICION);
		$criteria->addSelectColumn(MaquinaPeer::MAQ_FOTO_URL);
		$criteria->addSelectColumn(MaquinaPeer::MAQ_TIEMPO_INYECCION);
		$criteria->addSelectColumn(MaquinaPeer::MAQ_FECHA_REGISTRO_SISTEMA);
		$criteria->addSelectColumn(MaquinaPeer::MAQ_CODIGO_INVENTARIO);
		$criteria->addSelectColumn(MaquinaPeer::MAQ_USU_CREA);
		$criteria->addSelectColumn(MaquinaPeer::MAQ_USU_ACTUALIZA);
		$criteria->addSelectColumn(MaquinaPeer::MAQ_FECHA_ACTUALIZACION);
		$criteria->addSelectColumn(MaquinaPeer::MAQ_ELIMINADO);
		$criteria->addSelectColumn(MaquinaPeer::MAQ_CAUSA_ELIMINACION);
		$criteria->addSelectColumn(MaquinaPeer::MAQ_CAUSA_ACTUALIZACION);
		$criteria->addSelectColumn(MaquinaPeer::MAQ_CAT_CODIGO);
		$criteria->addSelectColumn(MaquinaPeer::MAQ_INDICADORES);
	}

	/**
	 * Returns the number of rows matching criteria.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @return     int Number of matching rows.
	 */
	public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
	{
		// we may modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(MaquinaPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			MaquinaPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(MaquinaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseMaquinaPeer', $criteria, $con);
		}

		// BasePeer returns a PDOStatement
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}
	/**
	 * Method to select one object from the DB.
	 *
	 * @param      Criteria $criteria object used to create the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     Maquina
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = MaquinaPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	/**
	 * Method to do selects.
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     array Array of selected Objects
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelect(Criteria $criteria, PropelPDO $con = null)
	{
		return MaquinaPeer::populateObjects(MaquinaPeer::doSelectStmt($criteria, $con));
	}
	/**
	 * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
	 *
	 * Use this method directly if you want to work with an executed statement durirectly (for example
	 * to perform your own object hydration).
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con The connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     PDOStatement The executed PDOStatement object.
	 * @see        BasePeer::doSelect()
	 */
	public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(MaquinaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			MaquinaPeer::addSelectColumns($criteria);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseMaquinaPeer', $criteria, $con);
		}


		// BasePeer returns a PDOStatement
		return BasePeer::doSelect($criteria, $con);
	}
	/**
	 * Adds an object to the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doSelect*()
	 * methods in your stub classes -- you may need to explicitly add objects
	 * to the cache in order to ensure that the same objects are always returned by doSelect*()
	 * and retrieveByPK*() calls.
	 *
	 * @param      Maquina $value A Maquina object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(Maquina $obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getMaqCodigo();
			} // if key === null
			self::$instances[$key] = $obj;
		}
	}

	/**
	 * Removes an object from the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doDelete
	 * methods in your stub classes -- you may need to explicitly remove objects
	 * from the cache in order to prevent returning objects that no longer exist.
	 *
	 * @param      mixed $value A Maquina object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Maquina) {
				$key = (string) $value->getMaqCodigo();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Maquina object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
				throw $e;
			}

			unset(self::$instances[$key]);
		}
	} // removeInstanceFromPool()

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
	 * @return     Maquina Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
	 * @see        getPrimaryKeyHash()
	 */
	public static function getInstanceFromPool($key)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if (isset(self::$instances[$key])) {
				return self::$instances[$key];
			}
		}
		return null; // just to be explicit
	}
	
	/**
	 * Clear the instance pool.
	 *
	 * @return     void
	 */
	public static function clearInstancePool()
	{
		self::$instances = array();
	}
	
	/**
	 * Method to invalidate the instance pool of all tables related to maquina
	 * by a foreign key with ON DELETE CASCADE
	 */
	public static function clearRelatedInstancePool()
	{
	}

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
	 */
	public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
	{
		// If the PK cannot be derived from the row, return NULL.
		if ($row[$startcol] === null) {
			return null;
		}
		return (string) $row[$startcol];
	}

	/**
	 * The returned array will contain objects of the default type or
	 * objects that inherit from the default.
	 *
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function populateObjects(PDOStatement $stmt)
	{
		$results = array();
	
		// set the class once to avoid overhead in the loop
		$cls = MaquinaPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = MaquinaPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = MaquinaPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				MaquinaPeer::addInstanceToPool($obj, $key);
			} // if key exists
		}
		$stmt->closeCursor();
		return $results;
	}
	/**
	 * Returns the TableMap related to this peer.
	 * This method is not needed for general use but a specific application could have a need.
	 * @return     TableMap
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	/**
	 * Add a TableMap instance to the database for this peer class.
	 */
	public static function buildTableMap()
	{
	  $dbMap = Propel::getDatabaseMap(BaseMaquinaPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseMaquinaPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new MaquinaTableMap());
	  }
	}

	/**
	 * The class that the Peer will make instances of.
	 *
	 * If $withPrefix is true, the returned path
	 * uses a dot-path notation which is tranalted into a path
	 * relative to a location on the PHP include_path.
	 * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
	 *
	 * @param      boolean  Whether or not to return the path wit hthe class name 
	 * @return     string path.to.ClassName
	 */
	public static function getOMClass($withPrefix = true)
	{
		return $withPrefix ? MaquinaPeer::CLASS_DEFAULT : MaquinaPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a Maquina or Criteria object.
	 *
	 * @param      mixed $values Criteria or Maquina object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables('BaseMaquinaPeer:doInsert:pre') as $sf_hook)
    {
      if (false !== $sf_hook_retval = call_user_func($sf_hook, 'BaseMaquinaPeer', $values, $con))
      {
        return $sf_hook_retval;
      }
    }

		if ($con === null) {
			$con = Propel::getConnection(MaquinaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Maquina object
		}

		if ($criteria->containsKey(MaquinaPeer::MAQ_CODIGO) && $criteria->keyContainsValue(MaquinaPeer::MAQ_CODIGO) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.MaquinaPeer::MAQ_CODIGO.')');
		}


		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		try {
			// use transaction because $criteria could contain info
			// for more than one table (I guess, conceivably)
			$con->beginTransaction();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollBack();
			throw $e;
		}

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables('BaseMaquinaPeer:doInsert:post') as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseMaquinaPeer', $values, $con, $pk);
    }

		return $pk;
	}

	/**
	 * Method perform an UPDATE on the database, given a Maquina or Criteria object.
	 *
	 * @param      mixed $values Criteria or Maquina object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables('BaseMaquinaPeer:doUpdate:pre') as $sf_hook)
    {
      if (false !== $sf_hook_retval = call_user_func($sf_hook, 'BaseMaquinaPeer', $values, $con))
      {
        return $sf_hook_retval;
      }
    }

		if ($con === null) {
			$con = Propel::getConnection(MaquinaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(MaquinaPeer::MAQ_CODIGO);
			$selectCriteria->add(MaquinaPeer::MAQ_CODIGO, $criteria->remove(MaquinaPeer::MAQ_CODIGO), $comparison);

		} else { // $values is Maquina object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$ret = BasePeer::doUpdate($selectCriteria, $criteria, $con);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables('BaseMaquinaPeer:doUpdate:post') as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseMaquinaPeer', $values, $con, $ret);
    }

    return $ret;
	}

	/**
	 * Method to DELETE all rows from the maquina table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(MaquinaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(MaquinaPeer::TABLE_NAME, $con);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			MaquinaPeer::clearInstancePool();
			MaquinaPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a Maquina or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Maquina object or primary key or array of primary keys
	 *              which is used to create the DELETE statement
	 * @param      PropelPDO $con the connection to use
	 * @return     int 	The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
	 *				if supported by native driver or if emulated using Propel.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	 public static function doDelete($values, PropelPDO $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(MaquinaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			MaquinaPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Maquina) { // it's a model object
			// invalidate the cache for this single object
			MaquinaPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(MaquinaPeer::MAQ_CODIGO, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				MaquinaPeer::removeInstanceFromPool($singleval);
			}
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; // initialize var to track total num of affected rows

		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			MaquinaPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Maquina object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Maquina $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(Maquina $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(MaquinaPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(MaquinaPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach ($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		return BasePeer::doValidate(MaquinaPeer::DATABASE_NAME, MaquinaPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Maquina
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = MaquinaPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(MaquinaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(MaquinaPeer::DATABASE_NAME);
		$criteria->add(MaquinaPeer::MAQ_CODIGO, $pk);

		$v = MaquinaPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	/**
	 * Retrieve multiple objects by pkey.
	 *
	 * @param      array $pks List of primary keys
	 * @param      PropelPDO $con the connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function retrieveByPKs($pks, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(MaquinaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(MaquinaPeer::DATABASE_NAME);
			$criteria->add(MaquinaPeer::MAQ_CODIGO, $pks, Criteria::IN);
			$objs = MaquinaPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

	// symfony behavior
	
	/**
	 * Returns an array of arrays that contain columns in each unique index.
	 *
	 * @return array
	 */
	static public function getUniqueColumnNames()
	{
	  return array();
	}

	// symfony_behaviors behavior
	
	/**
	 * Returns the name of the hook to call from inside the supplied method.
	 *
	 * @param string $method The calling method
	 *
	 * @return string A hook name for {@link sfMixer}
	 *
	 * @throws LogicException If the method name is not recognized
	 */
	static private function getMixerPreSelectHook($method)
	{
	  if (preg_match('/^do(Select|Count)(Join(All(Except)?)?|Stmt)?/', $method, $match))
	  {
	    return sprintf('BaseMaquinaPeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
	  }
	
	  throw new LogicException(sprintf('Unrecognized function "%s"', $method));
	}

} // BaseMaquinaPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseMaquinaPeer::buildTableMap();

