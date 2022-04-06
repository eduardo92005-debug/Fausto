<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220406083050 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cours ADD est_inscrit_id INT DEFAULT NULL, ADD est_dispense_id INT DEFAULT NULL, ADD enseigne_id INT DEFAULT NULL, ADD dispose_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9C9CB63C38 FOREIGN KEY (est_inscrit_id) REFERENCES utilisateurs (id)');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9C6CBD959A FOREIGN KEY (est_dispense_id) REFERENCES salles (id)');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9C6C2A0A71 FOREIGN KEY (enseigne_id) REFERENCES formateurs (id)');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9CD7D98158 FOREIGN KEY (dispose_id) REFERENCES tranche_age_categorie (id)');
        $this->addSql('CREATE INDEX IDX_FDCA8C9C9CB63C38 ON cours (est_inscrit_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_FDCA8C9C6CBD959A ON cours (est_dispense_id)');
        $this->addSql('CREATE INDEX IDX_FDCA8C9C6C2A0A71 ON cours (enseigne_id)');
        $this->addSql('CREATE INDEX IDX_FDCA8C9CD7D98158 ON cours (dispose_id)');
        $this->addSql('ALTER TABLE utilisateurs ADD est_inscrit_id INT DEFAULT NULL, ADD peut_choisir_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE utilisateurs ADD CONSTRAINT FK_497B315E9CB63C38 FOREIGN KEY (est_inscrit_id) REFERENCES cours (id)');
        $this->addSql('ALTER TABLE utilisateurs ADD CONSTRAINT FK_497B315E390C5D79 FOREIGN KEY (peut_choisir_id) REFERENCES planning (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_497B315E9CB63C38 ON utilisateurs (est_inscrit_id)');
        $this->addSql('CREATE INDEX IDX_497B315E390C5D79 ON utilisateurs (peut_choisir_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9C9CB63C38');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9C6CBD959A');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9C6C2A0A71');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9CD7D98158');
        $this->addSql('DROP INDEX IDX_FDCA8C9C9CB63C38 ON cours');
        $this->addSql('DROP INDEX UNIQ_FDCA8C9C6CBD959A ON cours');
        $this->addSql('DROP INDEX IDX_FDCA8C9C6C2A0A71 ON cours');
        $this->addSql('DROP INDEX IDX_FDCA8C9CD7D98158 ON cours');
        $this->addSql('ALTER TABLE cours DROP est_inscrit_id, DROP est_dispense_id, DROP enseigne_id, DROP dispose_id');
        $this->addSql('ALTER TABLE utilisateurs DROP FOREIGN KEY FK_497B315E9CB63C38');
        $this->addSql('ALTER TABLE utilisateurs DROP FOREIGN KEY FK_497B315E390C5D79');
        $this->addSql('DROP INDEX UNIQ_497B315E9CB63C38 ON utilisateurs');
        $this->addSql('DROP INDEX IDX_497B315E390C5D79 ON utilisateurs');
        $this->addSql('ALTER TABLE utilisateurs DROP est_inscrit_id, DROP peut_choisir_id');
    }
}
