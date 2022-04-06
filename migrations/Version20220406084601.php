<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220406084601 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE salles ADD est_dispense_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE salles ADD CONSTRAINT FK_799D45AA6CBD959A FOREIGN KEY (est_dispense_id) REFERENCES cours (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_799D45AA6CBD959A ON salles (est_dispense_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE salles DROP FOREIGN KEY FK_799D45AA6CBD959A');
        $this->addSql('DROP INDEX UNIQ_799D45AA6CBD959A ON salles');
        $this->addSql('ALTER TABLE salles DROP est_dispense_id');
    }
}
