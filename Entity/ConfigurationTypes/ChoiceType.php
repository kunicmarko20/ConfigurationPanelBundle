<?php

namespace KunicMarko\ConfigurationPanelBundle\Entity\ConfigurationTypes;
use Doctrine\ORM\Mapping as ORM;
use KunicMarko\ConfigurationPanelBundle\Entity\Configuration;
use KunicMarko\ConfigurationPanelBundle\Traits\ChoicesTrait;
/**
*
* @ORM\Entity(repositoryClass="KunicMarko\ConfigurationPanelBundle\Repository\ConfigurationRepository")
*
*/
class ChoiceType extends Configuration implements TemplateInterface
{
    use ChoicesTrait;
}
