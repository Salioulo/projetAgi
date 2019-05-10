<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190510202932 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL, plain_password VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, role VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE intervention_technicien');
        $this->addSql('ALTER TABLE demande DROP libelle_materiel, DROP marque, CHANGE traiter traiter VARCHAR(255) NOT NULL, CHANGE email email VARCHAR(255) DEFAULT NULL, CHANGE description_probleme description VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE entreprise ADD deleted_at DATETIME DEFAULT NULL, DROP created_by, DROP updated_by, DROP nom, CHANGE ninea ninea VARCHAR(255) DEFAULT NULL, CHANGE raison_sociale raison_sociale VARCHAR(255) DEFAULT NULL, CHANGE email email VARCHAR(255) DEFAULT NULL, CHANGE created_at created_at DATETIME DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE intervention ADD technicien_id INT NOT NULL, DROP created_at, DROP updated_at, DROP created_by, DROP updated_by, DROP date_fin, CHANGE entreprise_id entreprise_id INT DEFAULT NULL, CHANGE demande_id demande_id INT DEFAULT NULL, CHANGE resultat resultat VARCHAR(255) DEFAULT NULL, CHANGE mode_payment mode_payment VARCHAR(255) DEFAULT NULL, CHANGE mode_transaction mode_transaction VARCHAR(255) DEFAULT NULL, CHANGE montant montant VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE intervention ADD CONSTRAINT FK_D11814AB13457256 FOREIGN KEY (technicien_id) REFERENCES technicien (id)');
        $this->addSql('CREATE INDEX IDX_D11814AB13457256 ON intervention (technicien_id)');
        $this->addSql('ALTER TABLE materiel DROP created_at, DROP updated_at, DROP created_by, DROP updated_by');
        $this->addSql('ALTER TABLE secteur ADD deleted_by VARCHAR(255) DEFAULT NULL, DROP updated_at, CHANGE nombre_technicien nombre_technicien INT DEFAULT NULL, CHANGE nombre_prestataire nombre_prestataire INT DEFAULT NULL, CHANGE created_at created_at DATETIME DEFAULT NULL, CHANGE created_by created_by VARCHAR(255) DEFAULT NULL, CHANGE updated_by updated_by VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE technicien ADD deleted_at DATETIME DEFAULT NULL, CHANGE email email VARCHAR(255) DEFAULT NULL, CHANGE specialite specialite VARCHAR(255) DEFAULT NULL, CHANGE niveau niveau VARCHAR(255) DEFAULT NULL, CHANGE created_at created_at DATETIME DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE intervention_technicien (intervention_id INT NOT NULL, technicien_id INT NOT NULL, INDEX IDX_D4D5564113457256 (technicien_id), INDEX IDX_D4D556418EAE3863 (intervention_id), PRIMARY KEY(intervention_id, technicien_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE intervention_technicien ADD CONSTRAINT FK_D4D5564113457256 FOREIGN KEY (technicien_id) REFERENCES technicien (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE intervention_technicien ADD CONSTRAINT FK_D4D556418EAE3863 FOREIGN KEY (intervention_id) REFERENCES intervention (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE demande ADD libelle_materiel VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, ADD marque VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE traiter traiter TINYINT(1) NOT NULL, CHANGE email email VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE description description_probleme VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE entreprise ADD created_by VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, ADD updated_by VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, ADD nom VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, DROP deleted_at, CHANGE ninea ninea VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE raison_sociale raison_sociale VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE email email VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE created_at created_at DATETIME DEFAULT \'NULL\', CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE intervention DROP FOREIGN KEY FK_D11814AB13457256');
        $this->addSql('DROP INDEX IDX_D11814AB13457256 ON intervention');
        $this->addSql('ALTER TABLE intervention ADD created_at DATETIME DEFAULT \'NULL\', ADD updated_at DATETIME DEFAULT \'NULL\', ADD created_by VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, ADD updated_by VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, ADD date_fin DATETIME DEFAULT \'NULL\', DROP technicien_id, CHANGE entreprise_id entreprise_id INT DEFAULT NULL, CHANGE demande_id demande_id INT DEFAULT NULL, CHANGE resultat resultat VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE mode_payment mode_payment VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE mode_transaction mode_transaction VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE montant montant VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE materiel ADD created_at DATETIME DEFAULT \'NULL\', ADD updated_at DATETIME DEFAULT \'NULL\', ADD created_by VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, ADD updated_by VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE secteur ADD updated_at DATETIME DEFAULT \'NULL\', DROP deleted_by, CHANGE nombre_technicien nombre_technicien INT DEFAULT NULL, CHANGE nombre_prestataire nombre_prestataire INT DEFAULT NULL, CHANGE created_at created_at DATETIME DEFAULT \'NULL\', CHANGE created_by created_by VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE updated_by updated_by VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE technicien DROP deleted_at, CHANGE email email VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE specialite specialite VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE niveau niveau VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE created_at created_at DATETIME DEFAULT \'NULL\', CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\'');
    }
}
