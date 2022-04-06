<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220406081542 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cours ADD propose_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9CFC1D5802 FOREIGN KEY (propose_id) REFERENCES ecole_formation (id)');
        $this->addSql('CREATE INDEX IDX_FDCA8C9CFC1D5802 ON cours (propose_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9CFC1D5802');
        $this->addSql('DROP INDEX IDX_FDCA8C9CFC1D5802 ON cours');
        $this->addSql('ALTER TABLE cours DROP propose_id');
    }
}
