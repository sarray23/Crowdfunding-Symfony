<?php

use Acme\DemoBundle\AcmeDemoBundle;
use AppBundle\AppBundle;
use Avalanche\Bundle\ImagineBundle\AvalancheImagineBundle;
use DCS\RatingBundle\DCSRatingBundle;
use Doctrine\Bundle\DoctrineBundle\DoctrineBundle;
use Esprit\BackOfficeBundle\EspritBackOfficeBundle;
use Esprit\FrontOfficeBundle\EspritFrontOfficeBundle;
use FOS\UserBundle\FOSUserBundle;
use Knp\Bundle\PaginatorBundle\KnpPaginatorBundle;
use Nomaya\SocialBundle\NomayaSocialBundle;
use Ob\HighchartsBundle\ObHighchartsBundle;
use Sensio\Bundle\DistributionBundle\SensioDistributionBundle;
use Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle;
use Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle;
use Symfony\Bundle\AsseticBundle\AsseticBundle;
use Symfony\Bundle\DebugBundle\DebugBundle;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Bundle\MonologBundle\MonologBundle;
use Symfony\Bundle\SecurityBundle\SecurityBundle;
use Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle;
use Symfony\Bundle\TwigBundle\TwigBundle;
use Symfony\Bundle\WebProfilerBundle\WebProfilerBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new FrameworkBundle(),
            new SecurityBundle(),
            new TwigBundle(),
            new MonologBundle(),
            new SwiftmailerBundle(),
            new AsseticBundle(),
            new DoctrineBundle(),
            new SensioFrameworkExtraBundle(),
            new AppBundle(),
            new FOSUserBundle(),
            new EspritFrontOfficeBundle(),
            new KnpPaginatorBundle(),
            new DCSRatingBundle(),
            new AvalancheImagineBundle(),
            new NomayaSocialBundle(),
            new EspritBackOfficeBundle(),
            new ObHighchartsBundle(),
            new FOS\RestBundle\FOSRestBundle(),
            new FOS\CommentBundle\FOSCommentBundle(),
            new JMS\SerializerBundle\JMSSerializerBundle($this),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new DebugBundle();
            $bundles[] = new AcmeDemoBundle();
            $bundles[] = new WebProfilerBundle();
            $bundles[] = new SensioDistributionBundle();
            $bundles[] = new SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
