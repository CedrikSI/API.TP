<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190215231832 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE adherent (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, adresse VARCHAR(255) DEFAULT NULL, code_commune VARCHAR(255) DEFAULT NULL, mail VARCHAR(255) NOT NULL, tel VARCHAR(255) DEFAULT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pret (id INT AUTO_INCREMENT NOT NULL, livre_id INT NOT NULL, adherent_id INT NOT NULL, date_pret DATETIME NOT NULL, date_retour_prevue DATETIME NOT NULL, date_retour_reelle DATETIME DEFAULT NULL, INDEX IDX_52ECE97937D925CB (livre_id), INDEX IDX_52ECE97925F06C53 (adherent_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE pret ADD CONSTRAINT FK_52ECE97937D925CB FOREIGN KEY (livre_id) REFERENCES livre (id)');
        $this->addSql('ALTER TABLE pret ADD CONSTRAINT FK_52ECE97925F06C53 FOREIGN KEY (adherent_id) REFERENCES adherent (id)');
        $this->addSql('ALTER TABLE auteur RENAME INDEX idx_55ab1403256915b TO IDX_55AB1401B063272');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE pret DROP FOREIGN KEY FK_52ECE97925F06C53');
        $this->addSql('DROP TABLE adherent');
        $this->addSql('DROP TABLE pret');
        $this->addSql('ALTER TABLE auteur RENAME INDEX idx_55ab1401b063272 TO IDX_55AB1403256915B');
    }
}
