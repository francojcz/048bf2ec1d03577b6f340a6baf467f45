<?php

/**
 * Base class that represents a row from the 'consumible_maquina' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 08/28/13 00:53:25
 *
 * @package    lib.model.om
 */
abstract class BaseConsumibleMaquina extends BaseObject  implements Persistent {


	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        ConsumibleMaquinaPeer
	 */
	protected static $peer;

	/**
	 * The value for the com_codigo field.
	 * @var        int
	 */
	protected $com_codigo;

	/**
	 * The value for the com_maq_codigo field.
	 * @var        int
	 */
	protected $com_maq_codigo;

	/**
	 * The value for the com_fecha_cambio field.
	 * @var        string
	 */
	protected $com_fecha_cambio;

	/**
	 * The value for the com_item field.
	 * @var        string
	 */
	protected $com_item;

	/**
	 * The value for the com_numero_parte field.
	 * @var        string
	 */
	protected $com_numero_parte;

	/**
	 * The value for the com_periodicidad field.
	 * @var        int
	 */
	protected $com_periodicidad;

	/**
	 * The value for the com_proximo_mantenimiento field.
	 * @var        string
	 */
	protected $com_proximo_mantenimiento;

	/**
	 * The value for the com_fecha_registro_sistema field.
	 * @var        string
	 */
	protected $com_fecha_registro_sistema;

	/**
	 * @var        Maquina
	 */
	protected $aMaquina;

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
	
	const PEER = 'ConsumibleMaquinaPeer';

	/**
	 * Get the [com_codigo] column value.
	 * 
	 * @return     int
	 */
	public function getComCodigo()
	{
		return $this->com_codigo;
	}

	/**
	 * Get the [com_maq_codigo] column value.
	 * 
	 * @return     int
	 */
	public function getComMaqCodigo()
	{
		return $this->com_maq_codigo;
	}

	/**
	 * Get the [optionally formatted] temporal [com_fecha_cambio] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getComFechaCambio($format = 'Y-m-d H:i:s')
	{
		if ($this->com_fecha_cambio === null) {
			return null;
		}


		if ($this->com_fecha_cambio === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->com_fecha_cambio);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->com_fecha_cambio, true), $x);
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
	 * Get the [com_item] column value.
	 * 
	 * @return     string
	 */
	public function getComItem()
	{
		return $this->com_item;
	}

	/**
	 * Get the [com_numero_parte] column value.
	 * 
	 * @return     string
	 */
	public function getComNumeroParte()
	{
		return $this->com_numero_parte;
	}

	/**
	 * Get the [com_periodicidad] column value.
	 * 
	 * @return     int
	 */
	public function getComPeriodicidad()
	{
		return $this->com_periodicidad;
	}

	/**
	 * Get the [optionally formatted] temporal [com_proximo_mantenimiento] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getComProximoMantenimiento($format = 'Y-m-d H:i:s')
	{
		if ($this->com_proximo_mantenimiento === null) {
			return null;
		}


		if ($this->com_proximo_mantenimiento === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->com_proximo_mantenimiento);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->com_proximo_mantenimiento, true), $x);
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
	 * Get the [optionally formatted] temporal [com_fecha_registro_sistema] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getComFechaRegistroSistema($format = 'Y-m-d H:i:s')
	{
		if ($this->com_fecha_registro_sistema === null) {
			return null;
		}


		if ($this->com_fecha_registro_sistema === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->com_fecha_registro_sistema);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->com_fecha_registro_sistema, true), $x);
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
	 * Set the value of [com_codigo] column.
	 * 
	 * @param      int $v new value
	 * @return     ConsumibleMaquina The current object (for fluent API support)
	 */
	public function setComCodigo($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->com_codigo !== $v) {
			$this->com_codigo = $v;
			$this->modifiedColumns[] = ConsumibleMaquinaPeer::COM_CODIGO;
		}

		return $this;
	} // setComCodigo()

	/**
	 * Set the value of [com_maq_codigo] column.
	 * 
	 * @param      int $v new value
	 * @return     ConsumibleMaquina The current object (for fluent API support)
	 */
	public function setComMaqCodigo($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->com_maq_codigo !== $v) {
			$this->com_maq_codigo = $v;
			$this->modifiedColumns[] = ConsumibleMaquinaPeer::COM_MAQ_CODIGO;
		}

		if ($this->aMaquina !== null && $this->aMaquina->getMaqCodigo() !== $v) {
			$this->aMaquina = null;
		}

		return $this;
	} // setComMaqCodigo()

	/**
	 * Sets the value of [com_fecha_cambio] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     ConsumibleMaquina The current object (for fluent API support)
	 */
	public function setComFechaCambio($v)
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

		if ( $this->com_fecha_cambio !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->com_fecha_cambio !== null && $tmpDt = new DateTime($this->com_fecha_cambio)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->com_fecha_cambio = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = ConsumibleMaquinaPeer::COM_FECHA_CAMBIO;
			}
		} // if either are not null

		return $this;
	} // setComFechaCambio()

	/**
	 * Set the value of [com_item] column.
	 * 
	 * @param      string $v new value
	 * @return     ConsumibleMaquina The current object (for fluent API support)
	 */
	public function setComItem($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->com_item !== $v) {
			$this->com_item = $v;
			$this->modifiedColumns[] = ConsumibleMaquinaPeer::COM_ITEM;
		}

		return $this;
	} // setComItem()

	/**
	 * Set the value of [com_numero_parte] column.
	 * 
	 * @param      string $v new value
	 * @return     ConsumibleMaquina The current object (for fluent API support)
	 */
	public function setComNumeroParte($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->com_numero_parte !== $v) {
			$this->com_numero_parte = $v;
			$this->modifiedColumns[] = ConsumibleMaquinaPeer::COM_NUMERO_PARTE;
		}

		return $this;
	} // setComNumeroParte()

	/**
	 * Set the value of [com_periodicidad] column.
	 * 
	 * @param      int $v new value
	 * @return     ConsumibleMaquina The current object (for fluent API support)
	 */
	public function setComPeriodicidad($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->com_periodicidad !== $v) {
			$this->com_periodicidad = $v;
			$this->modifiedColumns[] = ConsumibleMaquinaPeer::COM_PERIODICIDAD;
		}

		return $this;
	} // setComPeriodicidad()

	/**
	 * Sets the value of [com_proximo_mantenimiento] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     ConsumibleMaquina The current object (for fluent API support)
	 */
	public function setComProximoMantenimiento($v)
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

		if ( $this->com_proximo_mantenimiento !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->com_proximo_mantenimiento !== null && $tmpDt = new DateTime($this->com_proximo_mantenimiento)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->com_proximo_mantenimiento = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = ConsumibleMaquinaPeer::COM_PROXIMO_MANTENIMIENTO;
			}
		} // if either are not null

		return $this;
	} // setComProximoMantenimiento()

	/**
	 * Sets the value of [com_fecha_registro_sistema] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     ConsumibleMaquina The current object (for fluent API support)
	 */
	public function setComFechaRegistroSistema($v)
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

		if ( $this->com_fecha_registro_sistema !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->com_fecha_registro_sistema !== null && $tmpDt = new DateTime($this->com_fecha_registro_sistema)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->com_fecha_registro_sistema = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = ConsumibleMaquinaPeer::COM_FECHA_REGISTRO_SISTEMA;
			}
		} // if either are not null

		return $this;
	} // setComFechaRegistroSistema()

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

			$this->com_codigo = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->com_maq_codigo = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->com_fecha_cambio = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->com_item = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->com_numero_parte = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->com_periodicidad = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->com_proximo_mantenimiento = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->com_fecha_registro_sistema = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 8; // 8 = ConsumibleMaquinaPeer::NUM_COLUMNS - ConsumibleMaquinaPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating ConsumibleMaquina object", $e);
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

		if ($this->aMaquina !== null && $this->com_maq_codigo !== $this->aMaquina->getMaqCodigo()) {
			$this->aMaquina = null;
		}
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
			$con = Propel::getConnection(ConsumibleMaquinaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = ConsumibleMaquinaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aMaquina = null;
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
			$con = Propel::getConnection(ConsumibleMaquinaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseConsumibleMaquina:delete:pre') as $callable)
			{
			  if (call_user_func($callable, $this, $con))
			  {
			    $con->commit();
			
			    return;
			  }
			}

			if ($ret) {
				ConsumibleMaquinaPeer::doDelete($this, $con);
				$this->postDelete($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseConsumibleMaquina:delete:post') as $callable)
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
			$con = Propel::getConnection(ConsumibleMaquinaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseConsumibleMaquina:save:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseConsumibleMaquina:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				ConsumibleMaquinaPeer::addInstanceToPool($this);
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

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aMaquina !== null) {
				if ($this->aMaquina->isModified() || $this->aMaquina->isNew()) {
					$affectedRows += $this->aMaquina->save($con);
				}
				$this->setMaquina($this->aMaquina);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = ConsumibleMaquinaPeer::COM_CODIGO;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = ConsumibleMaquinaPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setComCodigo($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += ConsumibleMaquinaPeer::doUpdate($this, $con);
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


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aMaquina !== null) {
				if (!$this->aMaquina->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aMaquina->getValidationFailures());
				}
			}


			if (($retval = ConsumibleMaquinaPeer::doValidate($this, $columns)) !== true) {
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
		$pos = ConsumibleMaquinaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getComCodigo();
				break;
			case 1:
				return $this->getComMaqCodigo();
				break;
			case 2:
				return $this->getComFechaCambio();
				break;
			case 3:
				return $this->getComItem();
				break;
			case 4:
				return $this->getComNumeroParte();
				break;
			case 5:
				return $this->getComPeriodicidad();
				break;
			case 6:
				return $this->getComProximoMantenimiento();
				break;
			case 7:
				return $this->getComFechaRegistroSistema();
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
		$keys = ConsumibleMaquinaPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getComCodigo(),
			$keys[1] => $this->getComMaqCodigo(),
			$keys[2] => $this->getComFechaCambio(),
			$keys[3] => $this->getComItem(),
			$keys[4] => $this->getComNumeroParte(),
			$keys[5] => $this->getComPeriodicidad(),
			$keys[6] => $this->getComProximoMantenimiento(),
			$keys[7] => $this->getComFechaRegistroSistema(),
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
		$pos = ConsumibleMaquinaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setComCodigo($value);
				break;
			case 1:
				$this->setComMaqCodigo($value);
				break;
			case 2:
				$this->setComFechaCambio($value);
				break;
			case 3:
				$this->setComItem($value);
				break;
			case 4:
				$this->setComNumeroParte($value);
				break;
			case 5:
				$this->setComPeriodicidad($value);
				break;
			case 6:
				$this->setComProximoMantenimiento($value);
				break;
			case 7:
				$this->setComFechaRegistroSistema($value);
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
		$keys = ConsumibleMaquinaPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setComCodigo($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setComMaqCodigo($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setComFechaCambio($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setComItem($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setComNumeroParte($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setComPeriodicidad($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setComProximoMantenimiento($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setComFechaRegistroSistema($arr[$keys[7]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(ConsumibleMaquinaPeer::DATABASE_NAME);

		if ($this->isColumnModified(ConsumibleMaquinaPeer::COM_CODIGO)) $criteria->add(ConsumibleMaquinaPeer::COM_CODIGO, $this->com_codigo);
		if ($this->isColumnModified(ConsumibleMaquinaPeer::COM_MAQ_CODIGO)) $criteria->add(ConsumibleMaquinaPeer::COM_MAQ_CODIGO, $this->com_maq_codigo);
		if ($this->isColumnModified(ConsumibleMaquinaPeer::COM_FECHA_CAMBIO)) $criteria->add(ConsumibleMaquinaPeer::COM_FECHA_CAMBIO, $this->com_fecha_cambio);
		if ($this->isColumnModified(ConsumibleMaquinaPeer::COM_ITEM)) $criteria->add(ConsumibleMaquinaPeer::COM_ITEM, $this->com_item);
		if ($this->isColumnModified(ConsumibleMaquinaPeer::COM_NUMERO_PARTE)) $criteria->add(ConsumibleMaquinaPeer::COM_NUMERO_PARTE, $this->com_numero_parte);
		if ($this->isColumnModified(ConsumibleMaquinaPeer::COM_PERIODICIDAD)) $criteria->add(ConsumibleMaquinaPeer::COM_PERIODICIDAD, $this->com_periodicidad);
		if ($this->isColumnModified(ConsumibleMaquinaPeer::COM_PROXIMO_MANTENIMIENTO)) $criteria->add(ConsumibleMaquinaPeer::COM_PROXIMO_MANTENIMIENTO, $this->com_proximo_mantenimiento);
		if ($this->isColumnModified(ConsumibleMaquinaPeer::COM_FECHA_REGISTRO_SISTEMA)) $criteria->add(ConsumibleMaquinaPeer::COM_FECHA_REGISTRO_SISTEMA, $this->com_fecha_registro_sistema);

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
		$criteria = new Criteria(ConsumibleMaquinaPeer::DATABASE_NAME);

		$criteria->add(ConsumibleMaquinaPeer::COM_CODIGO, $this->com_codigo);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getComCodigo();
	}

	/**
	 * Generic method to set the primary key (com_codigo column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setComCodigo($key);
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of ConsumibleMaquina (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setComMaqCodigo($this->com_maq_codigo);

		$copyObj->setComFechaCambio($this->com_fecha_cambio);

		$copyObj->setComItem($this->com_item);

		$copyObj->setComNumeroParte($this->com_numero_parte);

		$copyObj->setComPeriodicidad($this->com_periodicidad);

		$copyObj->setComProximoMantenimiento($this->com_proximo_mantenimiento);

		$copyObj->setComFechaRegistroSistema($this->com_fecha_registro_sistema);


		$copyObj->setNew(true);

		$copyObj->setComCodigo(NULL); // this is a auto-increment column, so set to default value

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
	 * @return     ConsumibleMaquina Clone of current object.
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
	 * @return     ConsumibleMaquinaPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new ConsumibleMaquinaPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Maquina object.
	 *
	 * @param      Maquina $v
	 * @return     ConsumibleMaquina The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setMaquina(Maquina $v = null)
	{
		if ($v === null) {
			$this->setComMaqCodigo(NULL);
		} else {
			$this->setComMaqCodigo($v->getMaqCodigo());
		}

		$this->aMaquina = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Maquina object, it will not be re-added.
		if ($v !== null) {
			$v->addConsumibleMaquina($this);
		}

		return $this;
	}


	/**
	 * Get the associated Maquina object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Maquina The associated Maquina object.
	 * @throws     PropelException
	 */
	public function getMaquina(PropelPDO $con = null)
	{
		if ($this->aMaquina === null && ($this->com_maq_codigo !== null)) {
			$this->aMaquina = MaquinaPeer::retrieveByPk($this->com_maq_codigo);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aMaquina->addConsumibleMaquinas($this);
			 */
		}
		return $this->aMaquina;
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

			$this->aMaquina = null;
	}

	// symfony_behaviors behavior
	
	/**
	 * Calls methods defined via {@link sfMixer}.
	 */
	public function __call($method, $arguments)
	{
	  if (!$callable = sfMixer::getCallable('BaseConsumibleMaquina:'.$method))
	  {
	    throw new sfException(sprintf('Call to undefined method BaseConsumibleMaquina::%s', $method));
	  }
	
	  array_unshift($arguments, $this);
	
	  return call_user_func_array($callable, $arguments);
	}

} // BaseConsumibleMaquina
