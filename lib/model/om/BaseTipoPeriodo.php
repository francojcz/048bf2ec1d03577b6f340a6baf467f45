<?php

/**
 * Base class that represents a row from the 'tipo_periodo' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 12/15/13 17:27:45
 *
 * @package    lib.model.om
 */
abstract class BaseTipoPeriodo extends BaseObject  implements Persistent {


	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        TipoPeriodoPeer
	 */
	protected static $peer;

	/**
	 * The value for the tp_codigo field.
	 * @var        int
	 */
	protected $tp_codigo;

	/**
	 * The value for the tp_nombre field.
	 * @var        string
	 */
	protected $tp_nombre;

	/**
	 * The value for the tp_fecha_registro_sistema field.
	 * @var        string
	 */
	protected $tp_fecha_registro_sistema;

	/**
	 * The value for the tp_usu_crea field.
	 * @var        int
	 */
	protected $tp_usu_crea;

	/**
	 * The value for the tp_usu_actualiza field.
	 * @var        int
	 */
	protected $tp_usu_actualiza;

	/**
	 * The value for the tp_fecha_actualizacion field.
	 * @var        string
	 */
	protected $tp_fecha_actualizacion;

	/**
	 * The value for the tp_eliminado field.
	 * @var        int
	 */
	protected $tp_eliminado;

	/**
	 * The value for the tp_causa_eliminacion field.
	 * @var        string
	 */
	protected $tp_causa_eliminacion;

	/**
	 * The value for the tp_causa_actualizacion field.
	 * @var        string
	 */
	protected $tp_causa_actualizacion;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	// symfony behavior
	
	const PEER = 'TipoPeriodoPeer';

	/**
	 * Get the [tp_codigo] column value.
	 * 
	 * @return     int
	 */
	public function getTpCodigo()
	{
		return $this->tp_codigo;
	}

	/**
	 * Get the [tp_nombre] column value.
	 * 
	 * @return     string
	 */
	public function getTpNombre()
	{
		return $this->tp_nombre;
	}

	/**
	 * Get the [optionally formatted] temporal [tp_fecha_registro_sistema] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getTpFechaRegistroSistema($format = 'Y-m-d H:i:s')
	{
		if ($this->tp_fecha_registro_sistema === null) {
			return null;
		}


		if ($this->tp_fecha_registro_sistema === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->tp_fecha_registro_sistema);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->tp_fecha_registro_sistema, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [tp_usu_crea] column value.
	 * 
	 * @return     int
	 */
	public function getTpUsuCrea()
	{
		return $this->tp_usu_crea;
	}

	/**
	 * Get the [tp_usu_actualiza] column value.
	 * 
	 * @return     int
	 */
	public function getTpUsuActualiza()
	{
		return $this->tp_usu_actualiza;
	}

	/**
	 * Get the [optionally formatted] temporal [tp_fecha_actualizacion] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getTpFechaActualizacion($format = 'Y-m-d H:i:s')
	{
		if ($this->tp_fecha_actualizacion === null) {
			return null;
		}


		if ($this->tp_fecha_actualizacion === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->tp_fecha_actualizacion);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->tp_fecha_actualizacion, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [tp_eliminado] column value.
	 * 
	 * @return     int
	 */
	public function getTpEliminado()
	{
		return $this->tp_eliminado;
	}

	/**
	 * Get the [tp_causa_eliminacion] column value.
	 * 
	 * @return     string
	 */
	public function getTpCausaEliminacion()
	{
		return $this->tp_causa_eliminacion;
	}

	/**
	 * Get the [tp_causa_actualizacion] column value.
	 * 
	 * @return     string
	 */
	public function getTpCausaActualizacion()
	{
		return $this->tp_causa_actualizacion;
	}

	/**
	 * Set the value of [tp_codigo] column.
	 * 
	 * @param      int $v new value
	 * @return     TipoPeriodo The current object (for fluent API support)
	 */
	public function setTpCodigo($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->tp_codigo !== $v) {
			$this->tp_codigo = $v;
			$this->modifiedColumns[] = TipoPeriodoPeer::TP_CODIGO;
		}

		return $this;
	} // setTpCodigo()

	/**
	 * Set the value of [tp_nombre] column.
	 * 
	 * @param      string $v new value
	 * @return     TipoPeriodo The current object (for fluent API support)
	 */
	public function setTpNombre($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tp_nombre !== $v) {
			$this->tp_nombre = $v;
			$this->modifiedColumns[] = TipoPeriodoPeer::TP_NOMBRE;
		}

		return $this;
	} // setTpNombre()

	/**
	 * Sets the value of [tp_fecha_registro_sistema] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     TipoPeriodo The current object (for fluent API support)
	 */
	public function setTpFechaRegistroSistema($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->tp_fecha_registro_sistema !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->tp_fecha_registro_sistema !== null && $tmpDt = new DateTime($this->tp_fecha_registro_sistema)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->tp_fecha_registro_sistema = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = TipoPeriodoPeer::TP_FECHA_REGISTRO_SISTEMA;
			}
		} // if either are not null

		return $this;
	} // setTpFechaRegistroSistema()

	/**
	 * Set the value of [tp_usu_crea] column.
	 * 
	 * @param      int $v new value
	 * @return     TipoPeriodo The current object (for fluent API support)
	 */
	public function setTpUsuCrea($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->tp_usu_crea !== $v) {
			$this->tp_usu_crea = $v;
			$this->modifiedColumns[] = TipoPeriodoPeer::TP_USU_CREA;
		}

		return $this;
	} // setTpUsuCrea()

	/**
	 * Set the value of [tp_usu_actualiza] column.
	 * 
	 * @param      int $v new value
	 * @return     TipoPeriodo The current object (for fluent API support)
	 */
	public function setTpUsuActualiza($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->tp_usu_actualiza !== $v) {
			$this->tp_usu_actualiza = $v;
			$this->modifiedColumns[] = TipoPeriodoPeer::TP_USU_ACTUALIZA;
		}

		return $this;
	} // setTpUsuActualiza()

	/**
	 * Sets the value of [tp_fecha_actualizacion] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     TipoPeriodo The current object (for fluent API support)
	 */
	public function setTpFechaActualizacion($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->tp_fecha_actualizacion !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->tp_fecha_actualizacion !== null && $tmpDt = new DateTime($this->tp_fecha_actualizacion)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->tp_fecha_actualizacion = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = TipoPeriodoPeer::TP_FECHA_ACTUALIZACION;
			}
		} // if either are not null

		return $this;
	} // setTpFechaActualizacion()

	/**
	 * Set the value of [tp_eliminado] column.
	 * 
	 * @param      int $v new value
	 * @return     TipoPeriodo The current object (for fluent API support)
	 */
	public function setTpEliminado($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->tp_eliminado !== $v) {
			$this->tp_eliminado = $v;
			$this->modifiedColumns[] = TipoPeriodoPeer::TP_ELIMINADO;
		}

		return $this;
	} // setTpEliminado()

	/**
	 * Set the value of [tp_causa_eliminacion] column.
	 * 
	 * @param      string $v new value
	 * @return     TipoPeriodo The current object (for fluent API support)
	 */
	public function setTpCausaEliminacion($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tp_causa_eliminacion !== $v) {
			$this->tp_causa_eliminacion = $v;
			$this->modifiedColumns[] = TipoPeriodoPeer::TP_CAUSA_ELIMINACION;
		}

		return $this;
	} // setTpCausaEliminacion()

	/**
	 * Set the value of [tp_causa_actualizacion] column.
	 * 
	 * @param      string $v new value
	 * @return     TipoPeriodo The current object (for fluent API support)
	 */
	public function setTpCausaActualizacion($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tp_causa_actualizacion !== $v) {
			$this->tp_causa_actualizacion = $v;
			$this->modifiedColumns[] = TipoPeriodoPeer::TP_CAUSA_ACTUALIZACION;
		}

		return $this;
	} // setTpCausaActualizacion()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->tp_codigo = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->tp_nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->tp_fecha_registro_sistema = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->tp_usu_crea = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->tp_usu_actualiza = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->tp_fecha_actualizacion = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->tp_eliminado = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->tp_causa_eliminacion = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->tp_causa_actualizacion = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 9; // 9 = TipoPeriodoPeer::NUM_COLUMNS - TipoPeriodoPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating TipoPeriodo object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TipoPeriodoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = TipoPeriodoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TipoPeriodoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseTipoPeriodo:delete:pre') as $callable)
			{
			  if (call_user_func($callable, $this, $con))
			  {
			    $con->commit();
			
			    return;
			  }
			}

			if ($ret) {
				TipoPeriodoPeer::doDelete($this, $con);
				$this->postDelete($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseTipoPeriodo:delete:post') as $callable)
				{
				  call_user_func($callable, $this, $con);
				}

				$this->setDeleted(true);
				$con->commit();
			} else {
				$con->commit();
			}
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TipoPeriodoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseTipoPeriodo:save:pre') as $callable)
			{
			  if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
			  {
			    $con->commit();
			
			    return $affectedRows;
			  }
			}

			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseTipoPeriodo:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				TipoPeriodoPeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			if ($this->isNew() ) {
				$this->modifiedColumns[] = TipoPeriodoPeer::TP_CODIGO;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = TipoPeriodoPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setTpCodigo($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += TipoPeriodoPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = TipoPeriodoPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TipoPeriodoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getTpCodigo();
				break;
			case 1:
				return $this->getTpNombre();
				break;
			case 2:
				return $this->getTpFechaRegistroSistema();
				break;
			case 3:
				return $this->getTpUsuCrea();
				break;
			case 4:
				return $this->getTpUsuActualiza();
				break;
			case 5:
				return $this->getTpFechaActualizacion();
				break;
			case 6:
				return $this->getTpEliminado();
				break;
			case 7:
				return $this->getTpCausaEliminacion();
				break;
			case 8:
				return $this->getTpCausaActualizacion();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param      string $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                        BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. Defaults to BasePeer::TYPE_PHPNAME.
	 * @param      boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns.  Defaults to TRUE.
	 * @return     an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true)
	{
		$keys = TipoPeriodoPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getTpCodigo(),
			$keys[1] => $this->getTpNombre(),
			$keys[2] => $this->getTpFechaRegistroSistema(),
			$keys[3] => $this->getTpUsuCrea(),
			$keys[4] => $this->getTpUsuActualiza(),
			$keys[5] => $this->getTpFechaActualizacion(),
			$keys[6] => $this->getTpEliminado(),
			$keys[7] => $this->getTpCausaEliminacion(),
			$keys[8] => $this->getTpCausaActualizacion(),
		);
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TipoPeriodoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setTpCodigo($value);
				break;
			case 1:
				$this->setTpNombre($value);
				break;
			case 2:
				$this->setTpFechaRegistroSistema($value);
				break;
			case 3:
				$this->setTpUsuCrea($value);
				break;
			case 4:
				$this->setTpUsuActualiza($value);
				break;
			case 5:
				$this->setTpFechaActualizacion($value);
				break;
			case 6:
				$this->setTpEliminado($value);
				break;
			case 7:
				$this->setTpCausaEliminacion($value);
				break;
			case 8:
				$this->setTpCausaActualizacion($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TipoPeriodoPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setTpCodigo($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTpNombre($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTpFechaRegistroSistema($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setTpUsuCrea($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setTpUsuActualiza($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setTpFechaActualizacion($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setTpEliminado($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setTpCausaEliminacion($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setTpCausaActualizacion($arr[$keys[8]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(TipoPeriodoPeer::DATABASE_NAME);

		if ($this->isColumnModified(TipoPeriodoPeer::TP_CODIGO)) $criteria->add(TipoPeriodoPeer::TP_CODIGO, $this->tp_codigo);
		if ($this->isColumnModified(TipoPeriodoPeer::TP_NOMBRE)) $criteria->add(TipoPeriodoPeer::TP_NOMBRE, $this->tp_nombre);
		if ($this->isColumnModified(TipoPeriodoPeer::TP_FECHA_REGISTRO_SISTEMA)) $criteria->add(TipoPeriodoPeer::TP_FECHA_REGISTRO_SISTEMA, $this->tp_fecha_registro_sistema);
		if ($this->isColumnModified(TipoPeriodoPeer::TP_USU_CREA)) $criteria->add(TipoPeriodoPeer::TP_USU_CREA, $this->tp_usu_crea);
		if ($this->isColumnModified(TipoPeriodoPeer::TP_USU_ACTUALIZA)) $criteria->add(TipoPeriodoPeer::TP_USU_ACTUALIZA, $this->tp_usu_actualiza);
		if ($this->isColumnModified(TipoPeriodoPeer::TP_FECHA_ACTUALIZACION)) $criteria->add(TipoPeriodoPeer::TP_FECHA_ACTUALIZACION, $this->tp_fecha_actualizacion);
		if ($this->isColumnModified(TipoPeriodoPeer::TP_ELIMINADO)) $criteria->add(TipoPeriodoPeer::TP_ELIMINADO, $this->tp_eliminado);
		if ($this->isColumnModified(TipoPeriodoPeer::TP_CAUSA_ELIMINACION)) $criteria->add(TipoPeriodoPeer::TP_CAUSA_ELIMINACION, $this->tp_causa_eliminacion);
		if ($this->isColumnModified(TipoPeriodoPeer::TP_CAUSA_ACTUALIZACION)) $criteria->add(TipoPeriodoPeer::TP_CAUSA_ACTUALIZACION, $this->tp_causa_actualizacion);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(TipoPeriodoPeer::DATABASE_NAME);

		$criteria->add(TipoPeriodoPeer::TP_CODIGO, $this->tp_codigo);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getTpCodigo();
	}

	/**
	 * Generic method to set the primary key (tp_codigo column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setTpCodigo($key);
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of TipoPeriodo (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setTpNombre($this->tp_nombre);

		$copyObj->setTpFechaRegistroSistema($this->tp_fecha_registro_sistema);

		$copyObj->setTpUsuCrea($this->tp_usu_crea);

		$copyObj->setTpUsuActualiza($this->tp_usu_actualiza);

		$copyObj->setTpFechaActualizacion($this->tp_fecha_actualizacion);

		$copyObj->setTpEliminado($this->tp_eliminado);

		$copyObj->setTpCausaEliminacion($this->tp_causa_eliminacion);

		$copyObj->setTpCausaActualizacion($this->tp_causa_actualizacion);


		$copyObj->setNew(true);

		$copyObj->setTpCodigo(NULL); // this is a auto-increment column, so set to default value

	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     TipoPeriodo Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     TipoPeriodoPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new TipoPeriodoPeer();
		}
		return self::$peer;
	}

	/**
	 * Resets all collections of referencing foreign keys.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect objects
	 * with circular references.  This is currently necessary when using Propel in certain
	 * daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all associated objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
		} // if ($deep)

	}

	// symfony_behaviors behavior
	
	/**
	 * Calls methods defined via {@link sfMixer}.
	 */
	public function __call($method, $arguments)
	{
	  if (!$callable = sfMixer::getCallable('BaseTipoPeriodo:'.$method))
	  {
	    throw new sfException(sprintf('Call to undefined method BaseTipoPeriodo::%s', $method));
	  }
	
	  array_unshift($arguments, $this);
	
	  return call_user_func_array($callable, $arguments);
	}

} // BaseTipoPeriodo
