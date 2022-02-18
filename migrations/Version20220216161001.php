<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220216161001 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produit_plat ADD desc_produitplat LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE resto_produitplat DROP FOREIGN KEY FK_D032F697BA5845CD');
        $this->addSql('DROP INDEX idx_d032f697ba5845cd ON resto_produitplat');
        $this->addSql('CREATE INDEX IDX_D032F69734F50173 ON resto_produitplat (id_produitplat)');
        $this->addSql('ALTER TABLE resto_produitplat ADD CONSTRAINT FK_D032F697BA5845CD FOREIGN KEY (id_produitplat) REFERENCES produit_plat (id_produitplat)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie CHANGE nom_categorie nom_categorie VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE produit_plat DROP desc_produitplat, CHANGE nom_produitplat nom_produitplat VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE restaurant CHANGE nom_restaurant nom_restaurant VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE desc_restaurant desc_restaurant LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE num_tel num_tel VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adresse adresse LONGTEXT DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE specialite specialite VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE Resto_produitplat DROP FOREIGN KEY FK_D032F69734F50173');
        $this->addSql('DROP INDEX idx_d032f69734f50173 ON Resto_produitplat');
        $this->addSql('CREATE INDEX IDX_D032F697BA5845CD ON Resto_produitplat (id_produitplat)');
        $this->addSql('ALTER TABLE Resto_produitplat ADD CONSTRAINT FK_D032F69734F50173 FOREIGN KEY (id_produitplat) REFERENCES produit_plat (id_produitplat)');
        $this->addSql('ALTER TABLE user CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom prenom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE sexe sexe VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email email VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE roles roles LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:json)\', CHANGE password password VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
