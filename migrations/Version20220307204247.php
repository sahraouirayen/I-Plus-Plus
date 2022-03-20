<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220307204247 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE actualite (id_actualite INT AUTO_INCREMENT NOT NULL, categorie INT DEFAULT NULL, titre_actualite VARCHAR(30) NOT NULL, description VARCHAR(255) NOT NULL, etendu VARCHAR(255) NOT NULL, Date_act DATE NOT NULL, image_act VARCHAR(255) NOT NULL, rating_act INT NOT NULL, vu INT NOT NULL, INDEX categorie (categorie), PRIMARY KEY(id_actualite)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE calendar (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, start DATETIME NOT NULL, end DATETIME NOT NULL, description VARCHAR(255) NOT NULL, allday TINYINT(1) NOT NULL, backgroundcolor VARCHAR(255) NOT NULL, bordorcolor VARCHAR(255) NOT NULL, textcolor VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie_actualite (id_cat_actualite INT AUTO_INCREMENT NOT NULL, nom_cat_actualite VARCHAR(100) NOT NULL, PRIMARY KEY(id_cat_actualite)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, date_commande DATE NOT NULL, montant_commande DOUBLE PRECISION NOT NULL, INDEX IDX_6EEAA67DA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE evenement (id_event INT AUTO_INCREMENT NOT NULL, nom_event VARCHAR(100) NOT NULL, date DATE NOT NULL, lieu VARCHAR(100) NOT NULL, desc_event VARCHAR(255) NOT NULL, type VARCHAR(100) NOT NULL, PRIMARY KEY(id_event)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE image_act (id_image INT AUTO_INCREMENT NOT NULL, image_act VARCHAR(255) NOT NULL, PRIMARY KEY(id_image)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ligne_commande (id INT AUTO_INCREMENT NOT NULL, prod_id INT DEFAULT NULL, commande_id INT DEFAULT NULL, quantite INT NOT NULL, price DOUBLE PRECISION NOT NULL, INDEX IDX_3170B74B1C83F75 (prod_id), INDEX IDX_3170B74B82EA2E54 (commande_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE prod (id INT AUTO_INCREMENT NOT NULL, id_promo_id INT DEFAULT NULL, nom_prod VARCHAR(255) NOT NULL, prix_prod VARCHAR(255) NOT NULL, status_prod TINYINT(1) NOT NULL, rate_prod INT NOT NULL, description_prod VARCHAR(255) NOT NULL, categorie_prod VARCHAR(255) NOT NULL, img_prod VARCHAR(255) NOT NULL, INDEX IDX_B5B41197801B966A (id_promo_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE promo (id INT AUTO_INCREMENT NOT NULL, pourcent_promo INT NOT NULL, date_exp VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reclamation (id INT AUTO_INCREMENT NOT NULL, typereclamations_id INT DEFAULT NULL, sujet_rec VARCHAR(255) NOT NULL, niveau INT NOT NULL, user_id INT NOT NULL, INDEX IDX_CE60640492E9C8EC (typereclamations_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (id_reservation INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, id_evenement INT NOT NULL, INDEX id_evenement (id_evenement), INDEX id_user (id_user), PRIMARY KEY(id_reservation)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE typereclamations (id INT AUTO_INCREMENT NOT NULL, niveau VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id_user INT AUTO_INCREMENT NOT NULL, nom VARCHAR(30) NOT NULL, prenom VARCHAR(30) NOT NULL, email VARCHAR(60) NOT NULL, password VARCHAR(60) NOT NULL, adresse VARCHAR(60) DEFAULT NULL, code_postale INT DEFAULT NULL, num_tel INT NOT NULL, roles LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json)\', reset_token VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id_user)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE actualite ADD CONSTRAINT FK_54928197497DD634 FOREIGN KEY (categorie) REFERENCES categorie_actualite (id_cat_actualite)');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id_user)');
        $this->addSql('ALTER TABLE ligne_commande ADD CONSTRAINT FK_3170B74B1C83F75 FOREIGN KEY (prod_id) REFERENCES prod (id)');
        $this->addSql('ALTER TABLE ligne_commande ADD CONSTRAINT FK_3170B74B82EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE prod ADD CONSTRAINT FK_B5B41197801B966A FOREIGN KEY (id_promo_id) REFERENCES promo (id)');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE60640492E9C8EC FOREIGN KEY (typereclamations_id) REFERENCES typereclamations (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE actualite DROP FOREIGN KEY FK_54928197497DD634');
        $this->addSql('ALTER TABLE ligne_commande DROP FOREIGN KEY FK_3170B74B82EA2E54');
        $this->addSql('ALTER TABLE ligne_commande DROP FOREIGN KEY FK_3170B74B1C83F75');
        $this->addSql('ALTER TABLE prod DROP FOREIGN KEY FK_B5B41197801B966A');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE60640492E9C8EC');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67DA76ED395');
        $this->addSql('DROP TABLE actualite');
        $this->addSql('DROP TABLE calendar');
        $this->addSql('DROP TABLE categorie_actualite');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE evenement');
        $this->addSql('DROP TABLE image_act');
        $this->addSql('DROP TABLE ligne_commande');
        $this->addSql('DROP TABLE prod');
        $this->addSql('DROP TABLE promo');
        $this->addSql('DROP TABLE reclamation');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE typereclamations');
        $this->addSql('DROP TABLE user');
    }
}
