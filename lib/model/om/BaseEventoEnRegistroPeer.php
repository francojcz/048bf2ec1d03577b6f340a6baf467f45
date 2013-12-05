<?php

/**
 * Base static class for performing query and update operations on the 'evento_en_registro' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 12/05/13 11:56:57
 *
 * @package    lib.model.om
 */
abstract class BaseEventoEnRegistroPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'propel';

	/** the table name for this class */
	const TABLE_NAME = 'evento_en_registro';

	/** the related Propel class for this table */
	const OM_CLASS = 'EventoEnRegistro';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'lib.model.EventoEnRegistro';

	/** the related TableMap class for this table */
	const TM_CLASS = 'EventoEnRegistroTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 14;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the EVRG_CODIGO field */
	const EVRG_CODIGO = 'evento_en_registro.EVRG_CODIGO';

	/** the column name for the EVRG_RUM_CODIGO field */
	const EVRG_RUM_CODIGO = 'evento_en_registro.EVRG_RUM_CODIGO';

	/** the column name for the EVRG_EVE_CODIGO field */
	const EVRG_EVE_CODIGO = 'evento_en_registro.EVRG_EVE_CODIGO';

	/** the column name for the EVRG_OBSERVACIONES field */
	const EVRG_OBSERVACIONES = 'evento_en_registro.EVRG_OBSERVACIONES';

	/** the column name for the EVRG_HORA_OCURRIO field */
	const EVRG_HORA_OCURRIO = 'evento_en_registro.EVRG_HORA_OCURRIO';

	/** the column name for the EVRG_HORA_REGISTRO field */
	const EVRG_HORA_REGISTRO = 'evento_en_registro.EVRG_HORA_REGISTRO';

	/** the column name for the EVRG_FECHA_REGISTRO_SISTEMA field */
	const EVRG_FECHA_REGISTRO_SISTEMA = 'evento_en_registro.EVRG_FECHA_REGISTRO_SISTEMA';

	/** the column name for the EVRG_USU_CREA field */
	const EVRG_USU_CREA = 'evento_en_registro.EVRG_USU_CREA';

	/** the column name for the EVRG_USU_ACTUALIZA field */
	const EVRG_USU_ACTUALIZA = 'evento_en_registro.EVRG_USU_ACTUALIZA';

	/** the column name for the EVRG_FECHA_ACTUALIZACION field */
	const EVRG_FECHA_ACTUALIZACION = 'evento_en_registro.EVRG_FECHA_ACTUALIZACION';

	/** the column name for the EVRG_ELIMINADO field */
	const EVRG_ELIMINADO = 'evento_en_registro.EVRG_ELIMINADO';

	/** the column name for the EVRG_CAUSA_ELIMINACION field */
	const EVRG_CAUSA_ELIMINACION = 'evento_en_registro.EVRG_CAUSA_ELIMINACION';

	/** the column name for the EVRG_CAUSA_ACTUALIZACION field */
	const EVRG_CAUSA_ACTUALIZACION = 'evento_en_registro.EVRG_CAUSA_ACTUALIZACION';

	/** the column name for the EVRG_DURACION field */
	const EVRG_DURACION = 'evento_en_registro.EVRG_DURACION';

	/**
	 * An identiy map to hold any loaded instances of EventoEnRegistro objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array EventoEnRegistro[]
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
		BasePeer::TYPE_PHPNAME => array ('EvrgCodigo', 'EvrgRumCodigo', 'EvrgEveCodigo', 'EvrgObservaciones', 'EvrgHoraOcurrio', 'EvrgHoraRegistro', 'EvrgFechaRegistroSistema', 'EvrgUsuCrea', 'EvrgUsuActualiza', 'EvrgFechaActualizacion', 'EvrgEliminado', 'EvrgCausaEliminacion', 'EvrgCausaActualizacion', 'EvrgDuracion', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('evrgCodigo', 'evrgRumCodigo', 'evrgEveCodigo', 'evrgObservaciones', 'evrgHoraOcurrio', 'evrgHoraRegistro', 'evrgFechaRegistroSistema', 'evrgUsuCrea', 'evrgUsuActualiza', 'evrgFechaActualizacion', 'evrgEliminado', 'evrgCausaEliminacion', 'evrgCausaActualizacion', 'evrgDuracion', ),
		BasePeer::TYPE_COLNAME => array (self::EVRG_CODIGO, self::EVRG_RUM_CODIGO, self::EVRG_EVE_CODIGO, self::EVRG_OBSERVACIONES, self::EVRG_HORA_OCURRIO, self::EVRG_HORA_REGISTRO, self::EVRG_FECHA_REGISTRO_SISTEMA, self::EVRG_USU_CREA, self::EVRG_USU_ACTUALIZA, self::EVRG_FECHA_ACTUALIZACION, self::EVRG_ELIMINADO, self::EVRG_CAUSA_ELIMINACION, self::EVRG_CAUSA_ACTUALIZACION, self::EVRG_DURACION, ),
		BasePeer::TYPE_FIELDNAME => array ('evrg_codigo', 'evrg_rum_codigo', 'evrg_eve_codigo', 'evrg_observaciones', 'evrg_hora_ocurrio', 'evrg_hora_registro', 'evrg_fecha_registro_sistema', 'evrg_usu_crea', 'evrg_usu_actualiza', 'evrg_fecha_actualizacion', 'evrg_eliminado', 'evrg_causa_eliminacion', 'evrg_causa_actualizacion', 'evrg_duracion', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('EvrgCodigo' => 0, 'EvrgRumCodigo' => 1, 'EvrgEveCodigo' => 2, 'EvrgObservaciones' => 3, 'EvrgHoraOcurrio' => 4, 'EvrgHoraRegistro' => 5, 'EvrgFechaRegistroSistema' => 6, 'EvrgUsuCrea' => 7, 'EvrgUsuActualiza' => 8, 'EvrgFechaActualizacion' => 9, 'EvrgEliminado' => 10, 'EvrgCausaEliminacion' => 11, 'EvrgCausaActualizacion' => 12, 'EvrgDuracion' => 13, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('evrgCodigo' => 0, 'evrgRumCodigo' => 1, 'evrgEveCodigo' => 2, 'evrgObservaciones' => 3, 'evrgHoraOcurrio' => 4, 'evrgHoraRegistro' => 5, 'evrgFechaRegistroSistema' => 6, 'evrgUsuCrea' => 7, 'evrgUsuActualiza' => 8, 'evrgFechaActualizacion' => 9, 'evrgEliminado' => 10, 'evrgCausaEliminacion' => 11, 'evrgCausaActualizacion' => 12, 'evrgDuracion' => 13, ),
		BasePeer::TYPE_COLNAME => array (self::EVRG_CODIGO => 0, self::EVRG_RUM_CODIGO => 1, self::EVRG_EVE_CODIGO => 2, self::EVRG_OBSERVACIONES => 3, self::EVRG_HORA_OCURRIO => 4, self::EVRG_HORA_REGISTRO => 5, self::EVRG_FECHA_REGISTRO_SISTEMA => 6, self::EVRG_USU_CREA => 7, self::EVRG_USU_ACTUALIZA => 8, self::EVRG_FECHA_ACTUALIZACION => 9, self::EVRG_ELIMINADO => 10, self::EVRG_CAUSA_ELIMINACION => 11, self::EVRG_CAUSA_ACTUALIZACION => 12, self::EVRG_DURACION => 13, ),
		BasePeer::TYPE_FIELDNAME => array ('evrg_codigo' => 0, 'evrg_rum_codigo' => 1, 'evrg_eve_codigo' => 2, 'evrg_observaciones' => 3, 'evrg_hora_ocurrio' => 4, 'evrg_hora_registro' => 5, 'evrg_fecha_registro_sistema' => 6, 'evrg_usu_crea' => 7, 'evrg_usu_actualiza' => 8, 'evrg_fecha_actualizacion' => 9, 'evrg_eliminado' => 10, 'evrg_causa_eliminacion' => 11, 'evrg_causa_actualizacion' => 12, 'evrg_duracion' => 13, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
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
	 * @param      string $column The column name for current table. (i.e. EventoEnRegistroPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(EventoEnRegistroPeer::TABLE_NAME.'.', $alias.'.', $column);
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
		$criteria->addSelectColumn(EventoEnRegistroPeer::EVRG_CODIGO);
		$criteria->addSelectColumn(EventoEnRegistroPeer::EVRG_RUM_CODIGO);
		$criteria->addSelectColumn(EventoEnRegistroPeer::EVRG_EVE_CODIGO);
		$criteria->addSelectColumn(EventoEnRegistroPeer::EVRG_OBSERVACIONES);
		$criteria->addSelectColumn(EventoEnRegistroPeer::EVRG_HORA_OCURRIO);
		$criteria->addSelectColumn(EventoEnRegistroPeer::EVRG_HORA_REGISTRO);
		$criteria->addSelectColumn(EventoEnRegistroPeer::EVRG_FECHA_REGISTRO_SISTEMA);
		$criteria->addSelectColumn(EventoEnRegistroPeer::EVRG_USU_CREA);
		$criteria->addSelectColumn(EventoEnRegistroPeer::EVRG_USU_ACTUALIZA);
		$criteria->addSelectColumn(EventoEnRegistroPeer::EVRG_FECHA_ACTUALIZACION);
		$criteria->addSelectColumn(EventoEnRegistroPeer::EVRG_ELIMINADO);
		$criteria->addSelectColumn(EventoEnRegistroPeer::EVRG_CAUSA_ELIMINACION);
		$criteria->addSelectColumn(EventoEnRegistroPeer::EVRG_CAUSA_ACTUALIZACION);
		$criteria->addSelectColumn(EventoEnRegistroPeer::EVRG_DURACION);
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
		$criteria->setPrimaryTableName(EventoEnRegistroPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			EventoEnRegistroPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(EventoEnRegistroPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseEventoEnRegistroPeer', $criteria, $con);
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
	 * @return     EventoEnRegistro
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = EventoEnRegistroPeer::doSelect($critcopy, $con);
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
		return EventoEnRegistroPeer::populateObjects(EventoEnRegistroPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(EventoEnRegistroPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			EventoEnRegistroPeer::addSelectColumns($criteria);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseEventoEnRegistroPeer', $criteria, $con);
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
	 * @param      EventoEnRegistro $value A EventoEnRegistro object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(EventoEnRegistro $obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getEvrgCodigo();
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
	 * @param      mixed $value A EventoEnRegistro object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof EventoEnRegistro) {
				$key = (string) $value->getEvrgCodigo();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or EventoEnRegistro object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     EventoEnRegistro Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to evento_en_registro
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
		$cls = EventoEnRegistroPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = EventoEnRegistroPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = EventoEnRegistroPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				EventoEnRegistroPeer::addInstanceToPool($obj, $key);
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
	  $dbMap = Propel::getDatabaseMap(BaseEventoEnRegistroPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseEventoEnRegistroPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new EventoEnRegistroTableMap());
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
		return $withPrefix ? EventoEnRegistroPeer::CLASS_DEFAULT : EventoEnRegistroPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a EventoEnRegistro or Criteria object.
	 *
	 * @param      mixed $values Criteria or EventoEnRegistro object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables('BaseEventoEnRegistroPeer:doInsert:pre') as $sf_hook)
    {
      if (false !== $sf_hook_retval = call_user_func($sf_hook, 'BaseEventoEnRegistroPeer', $values, $con))
      {
        return $sf_hook_retval;
      }
    }

		if ($con === null) {
			$con = Propel::getConnection(EventoEnRegistroPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from EventoEnRegistro object
		}

		if ($criteria->containsKey(EventoEnRegistroPeer::EVRG_CODIGO) && $criteria->keyContainsValue(EventoEnRegistroPeer::EVRG_CODIGO) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.EventoEnRegistroPeer::EVRG_CODIGO.')');
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
    foreach (sfMixer::getCallables('BaseEventoEnRegistroPeer:doInsert:post') as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseEventoEnRegistroPeer', $values, $con, $pk);
    }

		return $pk;
	}

	/**
	 * Method perform an UPDATE on the database, given a EventoEnRegistro or Criteria object.
	 *
	 * @param      mixed $values Criteria or EventoEnRegistro object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables('BaseEventoEnRegistroPeer:doUpdate:pre') as $sf_hook)
    {
      if (false !== $sf_hook_retval = call_user_func($sf_hook, 'BaseEventoEnRegistroPeer', $values, $con))
      {
        return $sf_hook_retval;
      }
    }

		if ($con === null) {
			$con = Propel::getConnection(EventoEnRegistroPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(EventoEnRegistroPeer::EVRG_CODIGO);
			$selectCriteria->add(EventoEnRegistroPeer::EVRG_CODIGO, $criteria->remove(EventoEnRegistroPeer::EVRG_CODIGO), $comparison);

		} else { // $values is EventoEnRegistro object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$ret = BasePeer::doUpdate($selectCriteria, $criteria, $con);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables('BaseEventoEnRegistroPeer:doUpdate:post') as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseEventoEnRegistroPeer', $values, $con, $ret);
    }

    return $ret;
	}

	/**
	 * Method to DELETE all rows from the evento_en_registro table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(EventoEnRegistroPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(EventoEnRegistroPeer::TABLE_NAME, $con);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			EventoEnRegistroPeer::clearInstancePool();
			EventoEnRegistroPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a EventoEnRegistro or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or EventoEnRegistro object or primary key or array of primary keys
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
			$con = Propel::getConnection(EventoEnRegistroPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			EventoEnRegistroPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof EventoEnRegistro) { // it's a model object
			// invalidate the cache for this single object
			EventoEnRegistroPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(EventoEnRegistroPeer::EVRG_CODIGO, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				EventoEnRegistroPeer::removeInstanceFromPool($singleval);
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
			EventoEnRegistroPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given EventoEnRegistro object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      EventoEnRegistro $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(EventoEnRegistro $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(EventoEnRegistroPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(EventoEnRegistroPeer::TABLE_NAME);

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

		return BasePeer::doValidate(EventoEnRegistroPeer::DATABASE_NAME, EventoEnRegistroPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     EventoEnRegistro
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = EventoEnRegistroPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(EventoEnRegistroPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(EventoEnRegistroPeer::DATABASE_NAME);
		$criteria->add(EventoEnRegistroPeer::EVRG_CODIGO, $pk);

		$v = EventoEnRegistroPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(EventoEnRegistroPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(EventoEnRegistroPeer::DATABASE_NAME);
			$criteria->add(EventoEnRegistroPeer::EVRG_CODIGO, $pks, Criteria::IN);
			$objs = EventoEnRegistroPeer::doSelect($criteria, $con);
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
	    return sprintf('BaseEventoEnRegistroPeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
	  }
	
	  throw new LogicException(sprintf('Unrecognized function "%s"', $method));
	}

} // BaseEventoEnRegistroPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseEventoEnRegistroPeer::buildTableMap();

