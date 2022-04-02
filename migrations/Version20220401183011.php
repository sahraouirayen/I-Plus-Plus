<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220401183011 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE panier (id INT AUTO_INCREMENT NOT NULL, produit_id INT DEFAULT NULL, quantite INT NOT NULL, total DOUBLE PRECISION NOT NULL, INDEX IDX_24CC0DF2F347EFB (produit_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF2F347EFB FOREIGN KEY (produit_id) REFERENCES prod (id)');
        $this->addSql('ALTER TABLE actualite CHANGE Date_act Date_act DATE NOT NULL, CHANGE rating_act rating_act INT NOT NULL, CHANGE vu vu INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE panier');
        $this->addSql('ALTER TABLE actualite CHANGE titre_actualite titre_actualite VARCHAR(30) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE etendu etendu VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE Date_act Date_act DATE DEFAULT NULL, CHANGE image_act image_act VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE rating_act rating_act INT DEFAULT 0, CHANGE vu vu INT DEFAULT 0');
        $this->addSql('ALTER TABLE calendar CHANGE title title VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE backgroundcolor backgroundcolor VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE bordorcolor bordorcolor VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE textcolor textcolor VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE categorie_actualite CHANGE nom_cat_actualite nom_cat_actualite VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE evenement CHANGE nom_event nom_event VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE lieu lieu VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE desc_event desc_event VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE type type VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE image_act CHANGE image_act image_act VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE prod CHANGE nom_prod nom_prod VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description_prod description_prod VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE categorie_prod categorie_prod VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE img_prod img_prod VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE promo CHANGE date_exp date_exp VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE reclamation CHANGE sujet_rec sujet_rec VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE typereclamations CHANGE niveau niveau VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user CHANGE nom nom VARCHAR(30) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom prenom VARCHAR(30) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email email VARCHAR(60) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(60) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adresse adresse VARCHAR(60) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE roles roles LONGTEXT DEFAULT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:json)\', CHANGE reset_token reset_token VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
