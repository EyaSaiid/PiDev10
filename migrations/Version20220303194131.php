<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220303194131 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie (id_categorie INT AUTO_INCREMENT NOT NULL, nom_categorie VARCHAR(255) NOT NULL, PRIMARY KEY(id_categorie)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE offre_travail (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, id_restaurant INT NOT NULL, titre VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, INDEX IDX_3C52099BA76ED395 (user_id), INDEX IDX_3C52099B4E1F92E8 (id_restaurant), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit_plat (id_produitplat INT AUTO_INCREMENT NOT NULL, id_categorie INT NOT NULL, nom_produitplat VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, desc_produitplat LONGTEXT DEFAULT NULL, INDEX IDX_9A0DFE8C9486A13 (id_categorie), PRIMARY KEY(id_produitplat)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (id_reservation INT AUTO_INCREMENT NOT NULL, id_restaurant INT NOT NULL, user_id INT NOT NULL, id_client INT NOT NULL, nombre INT NOT NULL, date_reservation DATETIME NOT NULL, INDEX IDX_42C849554E1F92E8 (id_restaurant), INDEX IDX_42C84955A76ED395 (user_id), PRIMARY KEY(id_reservation)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE restaurant (id_restaurant INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, nom_restaurant VARCHAR(255) NOT NULL, desc_restaurant LONGTEXT NOT NULL, capacite INT NOT NULL, num_tel VARCHAR(255) DEFAULT NULL, adresse LONGTEXT DEFAULT NULL, specialite VARCHAR(255) DEFAULT NULL, INDEX IDX_EB95123FA76ED395 (user_id), PRIMARY KEY(id_restaurant)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Resto_produitplat (id_restaurant INT NOT NULL, id_produitplat INT NOT NULL, INDEX IDX_D032F6974E1F92E8 (id_restaurant), INDEX IDX_D032F69734F50173 (id_produitplat), PRIMARY KEY(id_restaurant, id_produitplat)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, date DATE NOT NULL, sexe VARCHAR(255) NOT NULL, numero_tele INT NOT NULL, email VARCHAR(255) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, activation_token VARCHAR(255) DEFAULT NULL, reset_token VARCHAR(255) DEFAULT NULL, image VARCHAR(255) NOT NULL, address VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE offre_travail ADD CONSTRAINT FK_3C52099BA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE offre_travail ADD CONSTRAINT FK_3C52099B4E1F92E8 FOREIGN KEY (id_restaurant) REFERENCES restaurant (id_restaurant) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE produit_plat ADD CONSTRAINT FK_9A0DFE8C9486A13 FOREIGN KEY (id_categorie) REFERENCES categorie (id_categorie) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849554E1F92E8 FOREIGN KEY (id_restaurant) REFERENCES restaurant (id_restaurant) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE restaurant ADD CONSTRAINT FK_EB95123FA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE Resto_produitplat ADD CONSTRAINT FK_D032F6974E1F92E8 FOREIGN KEY (id_restaurant) REFERENCES restaurant (id_restaurant)');
        $this->addSql('ALTER TABLE Resto_produitplat ADD CONSTRAINT FK_D032F69734F50173 FOREIGN KEY (id_produitplat) REFERENCES produit_plat (id_produitplat)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produit_plat DROP FOREIGN KEY FK_9A0DFE8C9486A13');
        $this->addSql('ALTER TABLE Resto_produitplat DROP FOREIGN KEY FK_D032F69734F50173');
        $this->addSql('ALTER TABLE offre_travail DROP FOREIGN KEY FK_3C52099B4E1F92E8');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C849554E1F92E8');
        $this->addSql('ALTER TABLE Resto_produitplat DROP FOREIGN KEY FK_D032F6974E1F92E8');
        $this->addSql('ALTER TABLE offre_travail DROP FOREIGN KEY FK_3C52099BA76ED395');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955A76ED395');
        $this->addSql('ALTER TABLE restaurant DROP FOREIGN KEY FK_EB95123FA76ED395');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE offre_travail');
        $this->addSql('DROP TABLE produit_plat');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE restaurant');
        $this->addSql('DROP TABLE Resto_produitplat');
        $this->addSql('DROP TABLE user');
    }
}
