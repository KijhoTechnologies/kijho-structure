<?php

namespace Kijho\StructureBundle\Command;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\ArrayInput;

/**
 * @author Luis Fernando Granados
 */
class AppImportDataCommand extends ContainerAwareCommand {

    const LOAD_DATA_ONLINE = 1;
    const LOAD_DATA_LOCAL = 2;

    protected function configure() {

        $this->setName('app:import:data')->setDescription('Comando encargado de '
                        . 'actualizar o eliminar segun se requiera')
                ->setDefinition([
                    new InputArgument('type', InputArgument::REQUIRED),
                    new InputArgument('license', InputArgument::OPTIONAL),
                ])
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        set_time_limit(0);
        ini_set('memory_limit', '-1');
        $container = $this->getContainer();
        
        $licenseId = null;
        if ((int) $input->getArgument('license')) {
            $licenseId = $input->getArgument('license');
        }

        if ($input->getArgument('type') == static::LOAD_DATA_ONLINE) {
            $type = static::LOAD_DATA_ONLINE;
        } else {
            $type = static::LOAD_DATA_LOCAL;
        }

        $this->update($output, $container, $type, $licenseId);
    }

    public function update($output, $container, $type, $licenseId = null) {


        /*  Ejecuta el comando para la carga de datos en el sistema,
         *  El parameter Type en este caso con el numero 2, es para decirle al sistema
         *  que es para ejecutar en una instalacion local
         *  y use el customEntity de local
         *  
         * 1 se usaria para ejecucion del codigo para la version online
         * ademas se debe pasar el numero de la licencia a la que se le va a 
         * realizar el proceso.. este proceso es opcional ejecutando el comando
         * por si solo, pero si lo hace desde licensor se tiene que enviar el id
         * de la licencia que se esta creando.
         */

        if ($type == static::LOAD_DATA_ONLINE) {
            $type = static::LOAD_DATA_ONLINE;

            $commandPopulateDatabaseApp = new PopulateDatabaseAppCommand();
            $commandPopulateDatabaseApp->setContainer($container);

            $argumentsPopulateDatabaseApp = array(
                'type' => $type,
                'license' => $licenseId
            );
            $inputPopulateDatabaseApp = new ArrayInput($argumentsPopulateDatabaseApp);
            $commandPopulateDatabaseApp->run($inputPopulateDatabaseApp, $output);
        } else {
            $type = static::LOAD_DATA_LOCAL;

            $commandCustomSchemeCreateAndPopulate = $this->getApplication()->find('app:schema:update');
            $argumentsCSCP = array(
                '--force' => true,
            );
            $inputCSCP = new ArrayInput($argumentsCSCP);
            $commandCustomSchemeCreateAndPopulate->run($inputCSCP, $output);

            $commandUpdateOrload = $this->getApplication()->find('app:populate:database');
            $argumentsUoL = array(
                'type' => $type,
            );
            $inputUoL = new ArrayInput($argumentsUoL);

            $commandUpdateOrload->run($inputUoL, $output);

            $commandCronsDefault = $this->getApplication()->find('app:crons:default');
            $argumentsCrons = array('');
            $inputCrons = new ArrayInput($argumentsCrons);

            $commandCronsDefault->run($inputCrons, $output);
        }
    }

}
