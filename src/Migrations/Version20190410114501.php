<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190410114501 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE intervention (id INT AUTO_INCREMENT NOT NULL, technicien_id INT NOT NULL, entreprise_id INT DEFAULT NULL, demande_id INT DEFAULT NULL, date_debut DATETIME NOT NULL, description VARCHAR(255) NOT NULL, resultat VARCHAR(255) DEFAULT NULL, mode_payment VARCHAR(255) DEFAULT NULL, mode_transaction VARCHAR(255) DEFAULT NULL, montant VARCHAR(255) DEFAULT NULL, type_intervention VARCHAR(255) NOT NULL, INDEX IDX_D11814AB13457256 (technicien_id), INDEX IDX_D11814ABA4AEAFEA (entreprise_id), INDEX IDX_D11814AB80E95E18 (demande_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE intervention ADD CONSTRAINT FK_D11814AB13457256 FOREIGN KEY (technicien_id) REFERENCES technicien (id)');
        $this->addSql('ALTER TABLE intervention ADD CONSTRAINT FK_D11814ABA4AEAFEA FOREIGN KEY (entreprise_id) REFERENCES entreprise (id)');
        $this->addSql('ALTER TABLE intervention ADD CONSTRAINT FK_D11814AB80E95E18 FOREIGN KEY (demande_id) REFERENCES demande (id)');
        $this->addSql('ALTER TABLE secteur CHANGE nombre_technicien nombre_technicien INT DEFAULT NULL, CHANGE nombre_prestataire nombre_prestataire INT DEFAULT NULL, CHANGE created_at created_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE demande CHANGE email email VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE entreprise CHANGE ninea ninea VARCHAR(255) DEFAULT NULL, CHANGE raison_sociale raison_sociale VARCHAR(255) DEFAULT NULL, CHANGE email email VARCHAR(255) DEFAULT NULL, CHANGE created_at created_at DATETIME DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL, CHANGE deleted_at deleted_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE technicien CHANGE email email VARCHAR(255) DEFAULT NULL, CHANGE specialite specialite VARCHAR(255) DEFAULT NULL, CHANGE niveau niveau VARCHAR(255) DEFAULT NULL, CHANGE created_at created_at DATETIME DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL, CHANGE deleted_at deleted_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE intervention');
        $this->addSql('ALTER TABLE demande CHANGE email email VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE entreprise CHANGE ninea ninea VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE raison_sociale raison_sociale VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE email email VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE created_at created_at DATETIME DEFAULT \'NULL\', CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\', CHANGE deleted_at deleted_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE secteur CHANGE nombre_technicien nombre_technicien INT DEFAULT NULL, CHANGE nombre_prestataire nombre_prestataire INT DEFAULT NULL, CHANGE created_at created_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE technicien CHANGE email email VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE specialite specialite VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE niveau niveau VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE created_at created_at DATETIME DEFAULT \'NULL\', CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\', CHANGE deleted_at deleted_at DATETIME DEFAULT \'NULL\'');
    }
}
