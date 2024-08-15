<?php 
require 'paydunya/paydunya.php';

\Paydunya\Setup::setMasterKey("H1s2gNgc-KbU9-6YRa-FRaf-m9hh8BgWUDPX");
\Paydunya\Setup::setPublicKey("test_public_XHUIyFd9QCfGR1BJwojOS5BRFsJ");
\Paydunya\Setup::setPrivateKey("test_private_DqWThxtDzqARTjRjlylh9uxZ1KW");
\Paydunya\Setup::setToken("bl8OhbZ5RqV6WKmy6Gvy");
\Paydunya\Setup::setMode("test"); // Optionnel en mode test. Utilisez cette option pour les paiements tests.


//Configuration des informations de votre service/entreprise
\Paydunya\Checkout\Store::setName("Abo Madiyanv"); // Seul le nom est requis
\Paydunya\Checkout\Store::setTagline("Le meilleur videate");
\Paydunya\Checkout\Store::setPhoneNumber("771117420");
\Paydunya\Checkout\Store::setPostalAddress("Dakar Plateau - Etablissement kheweul");
\Paydunya\Checkout\Store::setWebsiteUrl("https://www.abomadiyanv.com/");
\Paydunya\Checkout\Store::setLogoUrl("");

\Paydunya\Checkout\Store::setCallbackUrl("https://www.abomadiyanv.com/callback_url.php");