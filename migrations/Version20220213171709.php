<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220213171709 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE restaurant (id_restaurant INT AUTO_INCREMENT NOT NULL, nom_restaurant VARCHAR(255) NOT NULL, desc_restaurant LONGTEXT NOT NULL, capacite INT NOT NULL, num_tel VARCHAR(255) DEFAULT NULL, adresse LONGTEXT DEFAULT NULL, specialite VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id_restaurant)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE offre_travail ADD CONSTRAINT FK_3C52099B4E1F92E8 FOREIGN KEY (id_restaurant) REFERENCES restaurant (id_restaurant) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_3C52099B4E1F92E8 ON offre_travail (id_restaurant)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE offre_travail DROP FOREIGN KEY FK_3C52099B4E1F92E8');
        $this->addSql('DROP TABLE restaurant');
        $this->addSql('DROP INDEX IDX_3C52099B4E1F92E8 ON offre_travail');
        $this->addSql('ALTER TABLE offre_travail CHANGE titre titre VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom prenom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE sexe sexe VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email email VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE roles roles LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:json)\'');
    }
}
