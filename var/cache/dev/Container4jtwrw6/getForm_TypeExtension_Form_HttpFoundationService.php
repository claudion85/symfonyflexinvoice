<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.type_extension.form.http_foundation' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\FormTypeExtensionInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\AbstractTypeExtension.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\RequestHandlerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\Extension\\HttpFoundation\\HttpFoundationRequestHandler.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\Util\\ServerParams.php';

return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler(new \Symfony\Component\Form\Util\ServerParams(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'})));
