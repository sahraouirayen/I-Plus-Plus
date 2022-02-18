<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220216144626 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE actualite CHANGE titre_actualite titre_actualite VARCHAR(30) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE categorie_actualite CHANGE nom_cat_actualite nom_cat_actualite VARCHAR(100) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE categorie_produit CHANGE nom_cat_prod nom_cat_prod VARCHAR(30) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE evenement CHANGE nom_event nom_event VARCHAR(100) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE lieu lieu VARCHAR(100) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE desc_event desc_event VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE produit CHANGE nom_produit nom_produit VARCHAR(100) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE reclamation CHANGE sujet_rec sujet_rec VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE role CHANGE role role VARCHAR(60) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE type_reclamation CHANGE niveau niveau VARCHAR(60) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE user CHANGE nom nom VARCHAR(30) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE prenom prenom VARCHAR(30) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE email email VARCHAR(60) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE password password VARCHAR(60) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE adresse adresse VARCHAR(60) DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE roles roles LONGTEXT DEFAULT NULL COLLATE `utf8mb4_general_ci` COMMENT \'(DC2Type:json)\'');
    }
}
