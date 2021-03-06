<?php

/**
 * Skeleton subclass for representing a row from the 'this_uso_maquina' table.
 *
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 12/13/10 23:16:13
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class RegistroUsoMaquina extends BaseRegistroUsoMaquina
{
    public function calcularTPPHoras()
    {
        return $this -> getRumTiempoCambioModelo() / 60;
    }

    public function calcularCalidad($inyeccionesEstandarPromedio)
    {
        $numeroInyecciones = $this -> contarNumeroInyeccionesObligatorias($inyeccionesEstandarPromedio);
        $numeroReinyecciones = $this -> contarNumeroTotalReinyecciones($inyeccionesEstandarPromedio);
        $numeroTotalInyecciones = $numeroInyecciones + $numeroReinyecciones;
        $calidad = 100 * ($numeroInyecciones / $numeroTotalInyecciones);
        return $calidad;
    }

    public function calcularEficiencia($inyeccionesEstandarPromedio)
    {
        $TP = $this -> calcularTPMinutos($inyeccionesEstandarPromedio);
        $TO = $this -> calcularTOMinutos($inyeccionesEstandarPromedio);
        $eficiencia = 0;
        if ($TO != 0)
        {
            $eficiencia = 100 * ($TP / $TO);
        }
        return $eficiencia;
    }

    public function calcularDisponibilidad($inyeccionesEstandarPromedio)
    {
        $TO = $this -> calcularTOMinutos($inyeccionesEstandarPromedio);
        $TF = $this -> calcularTiempoFuncionamientoMinutos();
        return RegistroUsoMaquinaPeer::calcularDisponibilidad($TO, $TF);
    }

    public function calcularTiempoEntreMetodosHoras($horas, $minutos, $segundos)
    {
        return ($this -> getRumTiempoEntreModelo('H') - $horas) + (($this -> getRumTiempoEntreModelo('i') - $minutos) / 60) + (($this -> getRumTiempoEntreModelo('s') - $segundos) / 3600);
    }

    public function calcularTPNPMinutos($inyeccionesEstandarPromedio)
    {
        $TPNP = $this -> calcularParosMenoresMinutos($inyeccionesEstandarPromedio);
        $TPNP += $this -> calcularRetrabajosMinutos($inyeccionesEstandarPromedio);
        return $TPNP;
    }

    //	public function calcularTPNPMinutos($inyeccionesEstandarPromedio) {
    //		//		$TPNP += $this->calcularPerdidaCambioMetodoAjusteMinutos();
    //		$TPNP = $this->calcularParosMenoresMinutos($inyeccionesEstandarPromedio);
    //		$TPNP += $this->calcularRetrabajosMinutos($inyeccionesEstandarPromedio);
    //		$TPNP += $this->getRumFallas();
    //		$TPNP += $this->calcularPerdidasVelocidadMinutos($inyeccionesEstandarPromedio);
    //
    //		return $TPNP;
    //	}
    public function calcularPerdidasVelocidadMinutos($inyeccionesEstandarPromedio)
    {
        $maquina = MaquinaPeer::retrieveByPK($this -> getRumMaqCodigo());

        $TO = $this -> calcularTOMinutos($inyeccionesEstandarPromedio);
        $TP = $this -> calcularTPMinutos($inyeccionesEstandarPromedio);
        $retrabajos = $this -> calcularRetrabajosMinutos($inyeccionesEstandarPromedio);
        $retrabajosEstandar = $this -> calcularRetrabajosEstandarMinutos($inyeccionesEstandarPromedio);

        $minutosPerdidasVelocidad = ($TO - $TP) + ($retrabajos - $retrabajosEstandar);

        return $minutosPerdidasVelocidad;
    }

    public function calcularTOMinutos($inyeccionesEstandarPromedio)
    {
        $maquina = MaquinaPeer::retrieveByPK($this -> getRumMaqCodigo());

        $TO = ($this -> getRumTiempoCorridaSistema() + $maquina -> getMaqTiempoInyeccion()) * $this -> getRumNumeroInyeccionEstandar();
        for ($i = 1; $i <= $inyeccionesEstandarPromedio; $i++)
        {
            $TO += ($this -> getRumTiempoCorridaCurvas() + $maquina -> getMaqTiempoInyeccion()) * eval('return $this->getRumNumeroInyeccionEstandar' . $i . '();');
        }

        $TO += ($this -> getRumTcProductoTerminado() + $maquina -> getMaqTiempoInyeccion()) * $this -> getRumNumMuestrasProducto() * $this -> getRumNumInyecXMuestraProduc();
        $TO += ($this -> getRumTcEstabilidad() + $maquina -> getMaqTiempoInyeccion()) * $this -> getRumNumMuestrasEstabilidad() * $this -> getRumNumInyecXMuestraEstabi();
        $TO += ($this -> getRumTcMateriaPrima() + $maquina -> getMaqTiempoInyeccion()) * $this -> getRumNumMuestrasMateriaPrima() * $this -> getRumNumInyecXMuestraMateri();
        $TO += ($this -> getRumTcPureza() + $maquina -> getMaqTiempoInyeccion()) * $this -> getRumNumMuestrasPureza() * $this -> getRumNumInyecXMuestraPureza();
        $TO += ($this -> getRumTcDisolucion() + $maquina -> getMaqTiempoInyeccion()) * $this -> getRumNumMuestrasDisolucion() * $this -> getRumNumInyecXMuestraDisolu();
        $TO += ($this -> getRumTcUniformidad() + $maquina -> getMaqTiempoInyeccion()) * $this -> getRumNumMuestrasUniformidad() * $this -> getRumNumInyecXMuestraUnifor();

        return $TO;
    }

    public function calcularTPMinutos($inyeccionesEstandarPromedio)
    {
        $maquina = MaquinaPeer::retrieveByPK($this -> getRumMaqCodigo());

        $TP = ($this -> getRumTiempoCorridaSistemaEst() + $maquina -> getMaqTiempoInyeccion()) * $this -> getRumNumeroInyeccionEstandar();
        for ($i = 1; $i <= $inyeccionesEstandarPromedio; $i++)
        {
            $TP += ($this -> getRumTiempoCorridaCurvasEsta() + $maquina -> getMaqTiempoInyeccion()) * eval('return $this->getRumNumeroInyeccionEstandar' . $i . '();');
        }

        $TP += ($this -> getRumTcProductoTerminadoEsta() + $maquina -> getMaqTiempoInyeccion()) * $this -> getRumNumMuestrasProducto() * $this -> getRumNumInyecXMuestraProduc();
        $TP += ($this -> getRumTcEstabilidadEstandar() + $maquina -> getMaqTiempoInyeccion()) * $this -> getRumNumMuestrasEstabilidad() * $this -> getRumNumInyecXMuestraEstabi();
        $TP += ($this -> getRumTcMateriaPrimaEstandar() + $maquina -> getMaqTiempoInyeccion()) * $this -> getRumNumMuestrasMateriaPrima() * $this -> getRumNumInyecXMuestraMateri();
        $TP += ($this -> getRumTcPurezaEstandar() + $maquina -> getMaqTiempoInyeccion()) * $this -> getRumNumMuestrasPureza() * $this -> getRumNumInyecXMuestraPureza();
        $TP += ($this -> getRumTcDisolucionEstandar() + $maquina -> getMaqTiempoInyeccion()) * $this -> getRumNumMuestrasDisolucion() * $this -> getRumNumInyecXMuestraDisolu();
        $TP += ($this -> getRumTcUniformidadEstandar() + $maquina -> getMaqTiempoInyeccion()) * $this -> getRumNumMuestrasUniformidad() * $this -> getRumNumInyecXMuestraUnifor();

        return $TP;
    }

    public function calcularTiempoFuncionamientoMinutos()
    {
        $minutosInicio = ($this -> getRumHoraInicioTrabajo('H') * 60) + $this -> getRumHoraInicioTrabajo('i') + ($this -> getRumHoraInicioTrabajo('s') / 60);
        $minutosFin = ($this -> getRumHoraFinTrabajo('H') * 60) + $this -> getRumHoraFinTrabajo('i') + ($this -> getRumHoraFinTrabajo('s') / 60);

        if ($minutosFin >= $minutosInicio)
        {
            return ($minutosFin - $minutosInicio);
        } else
        {
            return 1440 + ($minutosFin - $minutosInicio);
        }
    }

    public function calcularPerdidaCambioMetodoAjusteMinutos()
    {
        $minutosInicioAlistamiento = ($this -> getRumTiempoEntreModelo('H') * 60) + $this -> getRumTiempoEntreModelo('i') + ($this -> getRumTiempoEntreModelo('s') / 60);
        $minutosInicioCorrida = ($this -> getRumHoraInicioTrabajo('H') * 60) + ($this -> getRumHoraInicioTrabajo('i')) + ($this -> getRumHoraInicioTrabajo('s') / 60);
        $tiempoCambioModelo = $this -> getRumTiempoCambioModelo();

		$controlValorNegativo = 0;
		
        if ($minutosInicioCorrida >= $minutosInicioAlistamiento)
        {
			$controlValorNegativo = ($minutosInicioCorrida - $minutosInicioAlistamiento) - $tiempoCambioModelo;
        } 
		else
        {
			$controlValorNegativo = 1440 + ($minutosInicioCorrida - $minutosInicioAlistamiento) - $tiempoCambioModelo;
        }
		
		/*
		la variable controlValorNegativo se uso para corregir un error presentado en dividir registro al utilizar como hora de fin 23:59:59 ya que en
		la base de datos no se pudo guardar el valor de 23:59:59.999 lo cual dejaba un margen de perdida de -0.02 minutos
		*/
		if($controlValorNegativo > -0.03 && $controlValorNegativo < 0.03)
		{
			return 0.00;
		}
		else
		{
			return $controlValorNegativo;
		}
    }

    public function calcularRetrabajosMinutos($inyeccionesEstandarPromedio = 8)
    {
        $maquina = MaquinaPeer::retrieveByPK($this -> getRumMaqCodigo());
        $minutosRetrabajos = $this -> getRumNumInyeccionEstandarPer() * ($maquina -> getMaqTiempoInyeccion() + $this -> getRumTiempoCorridaSistema());
        $numeroTotalInyeccionesEstandarPerdidas = 0;
        for ($i = 1; $i <= $inyeccionesEstandarPromedio; $i++)
        {
            $numeroTotalInyeccionesEstandarPerdidas += eval('return $this->getRumNumInyeccionEstandar' . $i . 'Pe();');
        }
        $minutosRetrabajos += $numeroTotalInyeccionesEstandarPerdidas * ($maquina -> getMaqTiempoInyeccion() + $this -> getRumTiempoCorridaCurvas());

        $minutosRetrabajos += ($this -> getRumTcProductoTerminado() + $maquina -> getMaqTiempoInyeccion()) * $this -> getRumNumMuProductoPerdida() * $this -> getRumNumInyecXMuProducPerd();
        $minutosRetrabajos += ($this -> getRumTcEstabilidad() + $maquina -> getMaqTiempoInyeccion()) * $this -> getRumNumMuEstabilidadPerdida() * $this -> getRumNumInyecXMuEstabiPerd();
        $minutosRetrabajos += ($this -> getRumTcMateriaPrima() + $maquina -> getMaqTiempoInyeccion()) * $this -> getRumNumMuMateriaPrimaPerdi() * $this -> getRumNumInyecXMuMateriPerd();
        $minutosRetrabajos += ($this -> getRumTcPureza() + $maquina -> getMaqTiempoInyeccion()) * $this -> getRumNumMuestrasPurezaPerdid() * $this -> getRumNumInyecXMuPurezaPerd();
        $minutosRetrabajos += ($this -> getRumTcDisolucion() + $maquina -> getMaqTiempoInyeccion()) * $this -> getRumNumMuestrasDisolucionPe() * $this -> getRumNumInyecXMuDisoluPerd();
        $minutosRetrabajos += ($this -> getRumTcUniformidad() + $maquina -> getMaqTiempoInyeccion()) * $this -> getRumNumMuestrasUniformidadP() * $this -> getRumNumInyecXMuUniforPerd();

        return $minutosRetrabajos;
    }

    public function calcularRetrabajosEstandarMinutos($inyeccionesEstandarPromedio = 8)
    {
        $maquina = MaquinaPeer::retrieveByPK($this -> getRumMaqCodigo());
        $minutosRetrabajos = $this -> getRumNumInyeccionEstandarPer() * ($maquina -> getMaqTiempoInyeccion() + $this -> getRumTiempoCorridaSistemaEst());
        $numeroTotalInyeccionesEstandarPerdidas = 0;
        for ($i = 1; $i <= $inyeccionesEstandarPromedio; $i++)
        {
            $numeroTotalInyeccionesEstandarPerdidas += eval('return $this->getRumNumInyeccionEstandar' . $i . 'Pe();');
        }
        $minutosRetrabajos += $numeroTotalInyeccionesEstandarPerdidas * ($maquina -> getMaqTiempoInyeccion() + $this -> getRumTiempoCorridaCurvasEsta());

        $minutosRetrabajos += ($this -> getRumTcProductoTerminadoEsta() + $maquina -> getMaqTiempoInyeccion()) * $this -> getRumNumMuProductoPerdida() * $this -> getRumNumInyecXMuProducPerd();
        $minutosRetrabajos += ($this -> getRumTcEstabilidadEstandar() + $maquina -> getMaqTiempoInyeccion()) * $this -> getRumNumMuEstabilidadPerdida() * $this -> getRumNumInyecXMuEstabiPerd();
        $minutosRetrabajos += ($this -> getRumTcMateriaPrimaEstandar() + $maquina -> getMaqTiempoInyeccion()) * $this -> getRumNumMuMateriaPrimaPerdi() * $this -> getRumNumInyecXMuMateriPerd();
        $minutosRetrabajos += ($this -> getRumTcPurezaEstandar() + $maquina -> getMaqTiempoInyeccion()) * $this -> getRumNumMuestrasPurezaPerdid() * $this -> getRumNumInyecXMuPurezaPerd();
        $minutosRetrabajos += ($this -> getRumTcDisolucionEstandar() + $maquina -> getMaqTiempoInyeccion()) * $this -> getRumNumMuestrasDisolucionPe() * $this -> getRumNumInyecXMuDisoluPerd();
        $minutosRetrabajos += ($this -> getRumTcUniformidadEstandar() + $maquina -> getMaqTiempoInyeccion()) * $this -> getRumNumMuestrasUniformidadP() * $this -> getRumNumInyecXMuUniforPerd();

        return $minutosRetrabajos;
    }

    public function calcularParosMenoresIncluyendoCambioMetodoMinutos($inyeccionesEstandarPromedio)
    {
        $minutosParosMenores = $this -> calcularParosMenoresMinutos($inyeccionesEstandarPromedio);
        $minutosParosMenores += $this -> calcularPerdidaCambioMetodoAjusteMinutos();

        return $minutosParosMenores;
    }

    public function calcularParosMenoresMinutos($inyeccionesEstandarPromedio)
    {
        $maquina = MaquinaPeer::retrieveByPK($this -> getRumMaqCodigo());

        $TF = $this -> calcularTiempoFuncionamientoMinutos();
        $TO = $this -> calcularTOMinutos($inyeccionesEstandarPromedio);
        $minutosRetrabajos = $this -> calcularRetrabajosMinutos($inyeccionesEstandarPromedio);

        $minutosParosMenores = $TF - $TO - $minutosRetrabajos;

        if ($minutosParosMenores < 0)
        {
            $minutosParosMenores = 0;
        }

        return $minutosParosMenores;
    }

    //	public function calcularParosMenoresMinutos($inyeccionesEstandarPromedio) {
    //		$maquina = MaquinaPeer::retrieveByPK($this->getRumMaqCodigo());
    //
    //		$TF = $this->calcularTiempoFuncionamientoMinutos();
    //		$TP = $this->calcularTPMinutos($inyeccionesEstandarPromedio);
    //		$minutosRetrabajos = $this->calcularRetrabajosMinutos($inyeccionesEstandarPromedio);
    //		$minutosPerdidasVelocidad = $this->calcularPerdidasVelocidadMinutos($inyeccionesEstandarPromedio);
    //
    //		$minutosParosMenores = $TF - $TP - $minutosRetrabajos - $minutosPerdidasVelocidad;
    //
    //		return $minutosParosMenores;
    //	}

    //proposito sumar todas las inyecciones obligatorias y reinyecciones
    public function contarNumeroTotalInyecciones($inyeccionesEstandarPromedio)
    {
        $numeroTotalInyecciones = $this -> contarNumeroInyeccionesObligatorias();
        $numeroTotalInyecciones = $this -> contarNumeroTotalReinyecciones();

        return $numeroTotalInyecciones;
    }

    //proposito sumar las inyecciones minimas estandar
    public function contarNumeroInyeccionesObligatorias($inyeccionesEstandarPromedio = 8)
    {
        $numeroTotalInyeccionesRealizadas = $this -> getRumNumeroInyeccionEstandar();

        for ($i = 1; $i <= $inyeccionesEstandarPromedio; $i++)
        {
            $numeroTotalInyeccionesRealizadas += eval('return $this->getRumNumeroInyeccionEstandar' . $i . '();');
        }

        $numeroTotalInyeccionesRealizadas += ($this -> getRumNumMuestrasProducto() * $this -> getRumNumInyecXMuestraProduc());
        $numeroTotalInyeccionesRealizadas += ($this -> getRumNumMuestrasEstabilidad() * $this -> getRumNumInyecXMuestraEstabi());
        $numeroTotalInyeccionesRealizadas += ($this -> getRumNumMuestrasMateriaPrima() * $this -> getRumNumInyecXMuestraMateri());
        $numeroTotalInyeccionesRealizadas += ($this -> getRumNumMuestrasPureza() * $this -> getRumNumInyecXMuestraPureza());
        $numeroTotalInyeccionesRealizadas += ($this -> getRumNumMuestrasDisolucion() * $this -> getRumNumInyecXMuestraDisolu());
        $numeroTotalInyeccionesRealizadas += ($this -> getRumNumMuestrasUniformidad() * $this -> getRumNumInyecXMuestraUnifor());

        return $numeroTotalInyeccionesRealizadas;
    }

    //suma las reinyecciones
    public function contarNumeroTotalReinyecciones($inyeccionesEstandarPromedio = 8)
    {
        $numeroTotalInyeccionesPerdidas = $this -> getRumNumInyeccionEstandarPer();
        for ($i = 1; $i <= $inyeccionesEstandarPromedio; $i++)
        {
            $numeroTotalInyeccionesPerdidas += eval('return $this->getRumNumInyeccionEstandar' . $i . 'Pe();');
        }

        $numeroTotalInyeccionesPerdidas += ($this -> getRumNumMuProductoPerdida() * $this -> getRumNumInyecXMuProducPerd());
        $numeroTotalInyeccionesPerdidas += ($this -> getRumNumMuEstabilidadPerdida() * $this -> getRumNumInyecXMuEstabiPerd());
        $numeroTotalInyeccionesPerdidas += ($this -> getRumNumMuMateriaPrimaPerdi() * $this -> getRumNumInyecXMuMateriPerd());
        $numeroTotalInyeccionesPerdidas += ($this -> getRumNumMuestrasPurezaPerdid() * $this -> getRumNumInyecXMuPurezaPerd());
        $numeroTotalInyeccionesPerdidas += ($this -> getRumNumMuestrasDisolucionPe() * $this -> getRumNumInyecXMuDisoluPerd());
        $numeroTotalInyeccionesPerdidas += ($this -> getRumNumMuestrasUniformidadP() * $this -> getRumNumInyecXMuUniforPerd());

        return $numeroTotalInyeccionesPerdidas;
    }

    public function calcularTiempoCorridaHoras()
    {
        $minutosInicio = ($this -> getRumHoraInicioTrabajo('H') * 60) + $this -> getRumHoraInicioTrabajo('i') + ($this -> getRumHoraInicioTrabajo('s') / 60);
        $minutosFin = ($this -> getRumHoraFinTrabajo('H') * 60) + $this -> getRumHoraFinTrabajo('i') + ($this -> getRumHoraFinTrabajo('s') / 60);
        return ($minutosFin - $minutosInicio) / 60;
    }

    public function contarNumeroMuestras()
    {
        $numeroTotalMuestras = $this -> contarNumeroMuestrasProgramadas();
        $numeroTotalMuestras += $this -> contarNumeroMuestrasReAnalizadas();
        return $numeroTotalMuestras;
    }

    public function contarNumeroMuestrasProgramadas()
    {
        $numeroTotalMuestras = $this -> getRumNumMuestrasProducto();
        $numeroTotalMuestras += $this -> getRumNumMuestrasEstabilidad();
        $numeroTotalMuestras += $this -> getRumNumMuestrasMateriaPrima();
        $numeroTotalMuestras += $this -> getRumNumMuestrasPureza();
        $numeroTotalMuestras += $this -> getRumNumMuestrasDisolucion();
        $numeroTotalMuestras += $this -> getRumNumMuestrasUniformidad();
        return $numeroTotalMuestras;
    }

    public function contarNumeroMuestrasReAnalizadas()
    {
        $numeroTotalMuestrasReAnalizadas = $this -> getRumNumMuProductoPerdida();
        $numeroTotalMuestrasReAnalizadas += $this -> getRumNumMuEstabilidadPerdida();
        $numeroTotalMuestrasReAnalizadas += $this -> getRumNumMuMateriaPrimaPerdi();
        $numeroTotalMuestrasReAnalizadas += $this -> getRumNumMuestrasPurezaPerdid();
        $numeroTotalMuestrasReAnalizadas += $this -> getRumNumMuestrasDisolucionPe();
        $numeroTotalMuestrasReAnalizadas += $this -> getRumNumMuestrasUniformidadP();
        return $numeroTotalMuestrasReAnalizadas;
    }

    /**
     * Initializes internal state of RegistroUsoMaquina object.
     * @see        parent::__construct()
     */
    public function __construct()
    {
        // Make sure that parent constructor is always invoked, since that
        // is where any default values for this object are set.
        parent::__construct();
    }

    public function obtenerMetodo()
    {
        $codigo = $this -> getRumMetCodigo();
        $metodo = MetodoPeer::retrieveByPk($codigo);
        if ($metodo)
        {
            return $metodo -> getMetNombre();
        }
        return $codigo;
    }

    public function obtenerMaquina()
    {

        $codigo = $this -> getRumMaqCodigo();
        $maquina = MaquinaPeer::retrieveByPk($codigo);
        if ($maquina)
        {
            return $maquina -> getMaqNombre();
            //.'-'.$maquina->getMaqCodigoInventario();
        }
        return $codigo;
    }

    public function obtenerTiempoInyeccionMaquina()
    {
        $codigo = $this -> getRumMaqCodigo();
        $maquina = MaquinaPeer::retrieveByPk($codigo);
        if ($maquina)
        {
            return $maquina -> getMaqTiempoInyeccion();
        }
        return $codigo;
    }

    public function obtenerAnalista()
    {
        $codigoUsuario = $this -> getRumUsuCodigo();
        $criteria = new Criteria();
        $criteria -> add(EmpleadoPeer::EMPL_USU_CODIGO, $codigoUsuario);
        $empleado = EmpleadoPeer::doSelectOne($criteria);
        if ($empleado)
        {
            return $empleado -> getEmplNombres() . ' ' . $empleado -> getEmplApellidos();
        } else
        {
            $usuario = UsuarioPeer::retrieveByPK($codigoUsuario);
            return $usuario -> getUsuLogin();
        }
    }

    public function obtenerTPMetodo($maq_tiempo_inyeccion)
    {
        $TPMinutos = $this -> calcularTPMinutos(8);
        $TPHoras = $TPMinutos / 60;
        return $TPHoras;
    }

    public function obtenerTOMetodo($maq_tiempo_inyeccion)
    {
        $TOMinutos = $this -> calcularTOMinutos(8);
        $TOHoras = $TOMinutos / 60;
        return $TOHoras;
    }

    public function obtenerTNPMetodo()
    {
        $tnp = 0;

        $minutosFin = $this -> getRumHoraFinTrabajo('H') + ($this -> getRumHoraFinTrabajo('i') / 60) + ($this -> getRumHoraFinTrabajo('s') / 3600);
        //calcularPerdidaCambioMetodoAjusteMinutos por  getRumTiempoCambioModeloPerdi
        $minutoCambioModelo = ($this -> getRumTiempoCambioModelo() + $this -> calcularPerdidaCambioMetodoAjusteMinutos()) / 60;
        $tiempoDeCorrida = $this -> calcularTiempoCorridaHoras();

        $tnp = $minutosFin - $tiempoDeCorrida - $minutoCambioModelo;
        return $tnp;
    }

    public function obtenerTFMetodo()
    {
        $tf = 0;

        $minutosInicio = $this -> getRumHoraInicioTrabajo('H') + ($this -> getRumHoraInicioTrabajo('i') / 60) + ($this -> getRumHoraInicioTrabajo('s') / 3600);
        $minutosFin = $this -> getRumHoraFinTrabajo('H') + ($this -> getRumHoraFinTrabajo('i') / 60) + ($this -> getRumHoraFinTrabajo('s') / 3600);

        if ($minutosFin + $minutosInicio == 0)
        {
            $tf = 0;
            return $tf;
        }

        if ($minutosFin == 0)
        {
            $tf = 24 - $minutosInicio;
            return $tf;
        }

        if ($minutosInicio == 0)
        {
            $tf = 0;
            return $tf;
        }

        $tf = round($minutosFin - $minutosInicio, 2);

        return $tf;
    }

    public function obtenerTPNPMetodo($tiempo_inyec_equipo, $tp, $inyeccionesEstandarPromedio)
    {
        $pnp = 0;

        $defectos = $this -> calcularRetrabajosMinutos(8);

        $tiempo_corrida = $this -> calcularTiempoCorridaHoras();
        $paros_menores = 0;
        if (($tiempo_corrida - $tp) > 0)
        {
            $paros_menores = (($tiempo_corrida - $tp) * 60) - $defectos;
        }
        //$tpnp=($defectos+$paros_menores+$this->getRumFallas()+$this->calcularPerdidasVelocidadMinutos($inyeccionesEstandarPromedio))/60;
        $tpnp = ($defectos + $paros_menores) / 60;

        return $tpnp;
    }

} // RegistroUsoMaquina
