<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'validator.builder' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\validator\\Validation.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\validator\\ConstraintValidatorFactoryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\validator\\ContainerConstraintValidatorFactory.php';

$this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

$instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\ServiceLocator(['Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => function () {
    return ${($_ = isset($this->services['doctrine.orm.validator.unique']) ? $this->services['doctrine.orm.validator.unique'] : $this->load('getDoctrine_Orm_Validator_UniqueService.php')) && false ?: '_'};
}, 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => function () {
    return ${($_ = isset($this->services['validator.email']) ? $this->services['validator.email'] : ($this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false))) && false ?: '_'};
}, 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => function () {
    return ${($_ = isset($this->services['validator.expression']) ? $this->services['validator.expression'] : ($this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator())) && false ?: '_'};
}, 'doctrine.orm.validator.unique' => function () {
    return ${($_ = isset($this->services['doctrine.orm.validator.unique']) ? $this->services['doctrine.orm.validator.unique'] : $this->load('getDoctrine_Orm_Validator_UniqueService.php')) && false ?: '_'};
}, 'validator.expression' => function () {
    return ${($_ = isset($this->services['validator.expression']) ? $this->services['validator.expression'] : ($this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator())) && false ?: '_'};
}])));
if ($this->has('translator')) {
    $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});
}
$instance->setTranslationDomain('validators');
$instance->addXmlMappings([0 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/config/validation.xml')]);
$instance->enableAnnotationMapping(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'});
$instance->addMethodMapping('loadValidatorMetadata');
$instance->addObjectInitializers([0 => ${($_ = isset($this->services['doctrine.orm.validator_initializer']) ? $this->services['doctrine.orm.validator_initializer'] : $this->load('getDoctrine_Orm_ValidatorInitializerService.php')) && false ?: '_'}]);

return $instance;
