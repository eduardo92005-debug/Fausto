<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220406083254 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE planning ADD peut_choisir_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE planning ADD CONSTRAINT FK_D499BFF6390C5D79 FOREIGN KEY (peut_choisir_id) REFERENCES utilisateurs (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_D499BFF6390C5D79 ON planning (peut_choisir_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE planning DROP FOREIGN KEY FK_D499BFF6390C5D79');
        $this->addSql('DROP INDEX UNIQ_D499BFF6390C5D79 ON planning');
        $this->addSql('ALTER TABLE planning DROP peut_choisir_id');
    }
}
