<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190409164231 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE demande (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, traiter VARCHAR(255) NOT NULL, periode VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE entreprise (id INT AUTO_INCREMENT NOT NULL, ninea VARCHAR(255) DEFAULT NULL, raison_sociale VARCHAR(255) DEFAULT NULL, fixe VARCHAR(255) NOT NULL, mobile VARCHAR(255) NOT NULL, email VARCHAR(255) DEFAULT NULL, adresse VARCHAR(255) NOT NULL, type_entreprise VARCHAR(255) NOT NULL, disponibilite TINYINT(1) NOT NULL, actif TINYINT(1) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE entreprise_secteur (entreprise_id INT NOT NULL, secteur_id INT NOT NULL, INDEX IDX_38A196ACA4AEAFEA (entreprise_id), INDEX IDX_38A196AC9F7E4405 (secteur_id), PRIMARY KEY(entreprise_id, secteur_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE intervention (id INT AUTO_INCREMENT NOT NULL, date_debut DATETIME NOT NULL, description VARCHAR(255) NOT NULL, resultat VARCHAR(255) NOT NULL, mode_payment VARCHAR(255) DEFAULT NULL, mode_transaction VARCHAR(255) DEFAULT NULL, montant VARCHAR(255) DEFAULT NULL, type_transaction VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE intervention_technicien (intervention_id INT NOT NULL, technicien_id INT NOT NULL, INDEX IDX_D4D556418EAE3863 (intervention_id), INDEX IDX_D4D5564113457256 (technicien_id), PRIMARY KEY(intervention_id, technicien_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE intervention_entreprise (intervention_id INT NOT NULL, entreprise_id INT NOT NULL, INDEX IDX_4FE4806D8EAE3863 (intervention_id), INDEX IDX_4FE4806DA4AEAFEA (entreprise_id), PRIMARY KEY(intervention_id, entreprise_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE intervention_demande (intervention_id INT NOT NULL, demande_id INT NOT NULL, INDEX IDX_6D7AA3C08EAE3863 (intervention_id), INDEX IDX_6D7AA3C080E95E18 (demande_id), PRIMARY KEY(intervention_id, demande_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE materiel (id INT AUTO_INCREMENT NOT NULL, entreprise_id INT NOT NULL, numero_serie VARCHAR(255) NOT NULL, marque VARCHAR(255) NOT NULL, type_materiel VARCHAR(255) NOT NULL, libelle VARCHAR(255) NOT NULL, INDEX IDX_18D2B091A4AEAFEA (entreprise_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE secteur (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, nombre_technicien INT DEFAULT NULL, nombre_prestataire INT DEFAULT NULL, created_at DATETIME DEFAULT NULL, actif TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE technicien (id INT AUTO_INCREMENT NOT NULL, secteur_id INT NOT NULL, cni VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, email VARCHAR(255) DEFAULT NULL, adresse VARCHAR(255) NOT NULL, specialite VARCHAR(255) DEFAULT NULL, niveau VARCHAR(255) DEFAULT NULL, disponibilite TINYINT(1) NOT NULL, actif TINYINT(1) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, INDEX IDX_96282C4C9F7E4405 (secteur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE entreprise_secteur ADD CONSTRAINT FK_38A196ACA4AEAFEA FOREIGN KEY (entreprise_id) REFERENCES entreprise (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE entreprise_secteur ADD CONSTRAINT FK_38A196AC9F7E4405 FOREIGN KEY (secteur_id) REFERENCES secteur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE intervention_technicien ADD CONSTRAINT FK_D4D556418EAE3863 FOREIGN KEY (intervention_id) REFERENCES intervention (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE intervention_technicien ADD CONSTRAINT FK_D4D5564113457256 FOREIGN KEY (technicien_id) REFERENCES technicien (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE intervention_entreprise ADD CONSTRAINT FK_4FE4806D8EAE3863 FOREIGN KEY (intervention_id) REFERENCES intervention (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE intervention_entreprise ADD CONSTRAINT FK_4FE4806DA4AEAFEA FOREIGN KEY (entreprise_id) REFERENCES entreprise (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE intervention_demande ADD CONSTRAINT FK_6D7AA3C08EAE3863 FOREIGN KEY (intervention_id) REFERENCES intervention (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE intervention_demande ADD CONSTRAINT FK_6D7AA3C080E95E18 FOREIGN KEY (demande_id) REFERENCES demande (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE materiel ADD CONSTRAINT FK_18D2B091A4AEAFEA FOREIGN KEY (entreprise_id) REFERENCES entreprise (id)');
        $this->addSql('ALTER TABLE technicien ADD CONSTRAINT FK_96282C4C9F7E4405 FOREIGN KEY (secteur_id) REFERENCES secteur (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE intervention_demande DROP FOREIGN KEY FK_6D7AA3C080E95E18');
        $this->addSql('ALTER TABLE entreprise_secteur DROP FOREIGN KEY FK_38A196ACA4AEAFEA');
        $this->addSql('ALTER TABLE intervention_entreprise DROP FOREIGN KEY FK_4FE4806DA4AEAFEA');
        $this->addSql('ALTER TABLE materiel DROP FOREIGN KEY FK_18D2B091A4AEAFEA');
        $this->addSql('ALTER TABLE intervention_technicien DROP FOREIGN KEY FK_D4D556418EAE3863');
        $this->addSql('ALTER TABLE intervention_entreprise DROP FOREIGN KEY FK_4FE4806D8EAE3863');
        $this->addSql('ALTER TABLE intervention_demande DROP FOREIGN KEY FK_6D7AA3C08EAE3863');
        $this->addSql('ALTER TABLE entreprise_secteur DROP FOREIGN KEY FK_38A196AC9F7E4405');
        $this->addSql('ALTER TABLE technicien DROP FOREIGN KEY FK_96282C4C9F7E4405');
        $this->addSql('ALTER TABLE intervention_technicien DROP FOREIGN KEY FK_D4D5564113457256');
        $this->addSql('DROP TABLE demande');
        $this->addSql('DROP TABLE entreprise');
        $this->addSql('DROP TABLE entreprise_secteur');
        $this->addSql('DROP TABLE intervention');
        $this->addSql('DROP TABLE intervention_technicien');
        $this->addSql('DROP TABLE intervention_entreprise');
        $this->addSql('DROP TABLE intervention_demande');
        $this->addSql('DROP TABLE materiel');
        $this->addSql('DROP TABLE secteur');
        $this->addSql('DROP TABLE technicien');
    }
}
