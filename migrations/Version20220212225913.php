<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220212225913 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE Resto_produitplat (id_produitplat INT NOT NULL,  id_restaurant INT NOT NULL, INDEX IDX_D032F69734F50173 (id_produitplat), INDEX IDX_D032F6975DB4D575 ( id_restaurant), PRIMARY KEY(id_produitplat,  id_restaurant)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE Resto_produitplat ADD CONSTRAINT FK_D032F69734F50173 FOREIGN KEY (id_produitplat) REFERENCES produit_plat (id_produitplat)');
        $this->addSql('ALTER TABLE Resto_produitplat ADD CONSTRAINT FK_D032F6975DB4D575 FOREIGN KEY ( id_restaurant) REFERENCES restaurant (id_restaurant)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE Resto_produitplat');
        $this->addSql('ALTER TABLE categorie CHANGE nom_categorie nom_categorie VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE produit_plat CHANGE nom_produitplat nom_produitplat VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE restaurant CHANGE nom_restaurant nom_restaurant VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE desc_restaurant desc_restaurant LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE num_tel num_tel VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adresse adresse LONGTEXT DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE specialite specialite VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
