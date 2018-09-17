<?php

namespace App\DataFixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FOS\OAuthServerBundle\FOSOAuthServerBundle;
use FOS\OAuthServerBundle\Model\ClientManagerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ClientFixtures extends AbstractFixture implements FixtureInterface, ContainerAwareInterface
{

    /**
     * @var ContainerInterface
     */
    private $container;

    private $clientManager;

    public function __construct(ClientManagerInterface $clientManager)
    {
        $this->clientManager = $clientManager;
    }

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $objectManager)
    {
        $clientManager = $this->clientManager;
        $client = $clientManager->createClient();
        $client->setRedirectUris([]);
        $client->setAllowedGrantTypes(['password']);
        $client->setSecret("h5saqpssns8oowkk08k0go8owo448oog0wsgwwwccs4wsswcc");
        $client->setRandomId("67omylfhsjcww0kso84g8s4kk48cok0wowo8wks8gcwkwsg4k4");
        $clientManager->updateClient($client);

        $this->addReference('oauth-fixture-client', $client);
    }

}