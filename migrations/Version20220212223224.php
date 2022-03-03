<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220212223224 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation ADD id_reservation INT AUTO_INCREMENT NOT NULL, DROP id, ADD PRIMARY KEY (id_reservation)');
        $this->addSql('ALTER TABLE restaurant MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE restaurant DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE restaurant CHANGE id id_restaurant INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE restaurant ADD PRIMARY KEY (id_restaurant)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie CHANGE nom_categorie nom_categorie VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE reservation MODIFY id_reservation INT NOT NULL');
        $this->addSql('ALTER TABLE reservation DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE reservation ADD id INT NOT NULL, DROP id_reservation');
        $this->addSql('ALTER TABLE restaurant MODIFY id_restaurant INT NOT NULL');
        $this->addSql('ALTER TABLE restaurant DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE restaurant CHANGE nom_restaurant nom_restaurant VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE desc_restaurant desc_restaurant LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE num_tel num_tel VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adresse adresse LONGTEXT DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE specialite specialite VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE id_restaurant id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE restaurant ADD PRIMARY KEY (id)');
    }
}
