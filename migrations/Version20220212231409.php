<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220212231409 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produit_plat ADD CONSTRAINT FK_9A0DFE8C9486A13 FOREIGN KEY (id_categorie) REFERENCES categorie (id_categorie)');
        $this->addSql('CREATE INDEX IDX_9A0DFE8C9486A13 ON produit_plat (id_categorie)');
        $this->addSql('ALTER TABLE resto_produitplat DROP FOREIGN KEY FK_D032F6975DB4D575');
        $this->addSql('DROP INDEX IDX_D032F6975DB4D575 ON resto_produitplat');
        $this->addSql('ALTER TABLE resto_produitplat DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE resto_produitplat CHANGE id_restaurant  id_restaurant INT NOT NULL');
        $this->addSql('ALTER TABLE resto_produitplat ADD CONSTRAINT FK_D032F6975DB4D575 FOREIGN KEY ( id_restaurant) REFERENCES restaurant (id_restaurant)');
        $this->addSql('CREATE INDEX IDX_D032F6975DB4D575 ON resto_produitplat ( id_restaurant)');
        $this->addSql('ALTER TABLE resto_produitplat ADD PRIMARY KEY (id_produitplat,  id_restaurant)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie CHANGE nom_categorie nom_categorie VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE produit_plat DROP FOREIGN KEY FK_9A0DFE8C9486A13');
        $this->addSql('DROP INDEX IDX_9A0DFE8C9486A13 ON produit_plat');
        $this->addSql('ALTER TABLE produit_plat CHANGE nom_produitplat nom_produitplat VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE restaurant CHANGE nom_restaurant nom_restaurant VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE desc_restaurant desc_restaurant LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE num_tel num_tel VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adresse adresse LONGTEXT DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE specialite specialite VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE Resto_produitplat DROP FOREIGN KEY FK_D032F6975DB4D575');
        $this->addSql('DROP INDEX IDX_D032F6975DB4D575 ON Resto_produitplat');
        $this->addSql('ALTER TABLE Resto_produitplat DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE Resto_produitplat CHANGE  id_restaurant id_restaurant INT NOT NULL');
        $this->addSql('ALTER TABLE Resto_produitplat ADD CONSTRAINT FK_D032F6975DB4D575 FOREIGN KEY (id_restaurant) REFERENCES restaurant (id_restaurant)');
        $this->addSql('CREATE INDEX IDX_D032F6975DB4D575 ON Resto_produitplat (id_restaurant)');
        $this->addSql('ALTER TABLE Resto_produitplat ADD PRIMARY KEY (id_produitplat, id_restaurant)');
    }
}
