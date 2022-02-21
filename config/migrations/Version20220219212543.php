<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220219212543 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reponse ADD repondre_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reponse ADD CONSTRAINT FK_5FB6DEC75D693660 FOREIGN KEY (repondre_id) REFERENCES reclamation (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_5FB6DEC75D693660 ON reponse (repondre_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reponse DROP FOREIGN KEY FK_5FB6DEC75D693660');
        $this->addSql('DROP INDEX UNIQ_5FB6DEC75D693660 ON reponse');
        $this->addSql('ALTER TABLE reponse DROP repondre_id');
    }
}
