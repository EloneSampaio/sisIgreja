<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180115032745 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE familia (id INT AUTO_INCREMENT NOT NULL, nome_filho VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE crente ADD familia_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE crente ADD CONSTRAINT FK_848AA7C6D02563A3 FOREIGN KEY (familia_id) REFERENCES familia (id)');
        $this->addSql('CREATE INDEX IDX_848AA7C6D02563A3 ON crente (familia_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE crente DROP FOREIGN KEY FK_848AA7C6D02563A3');
        $this->addSql('DROP TABLE familia');
        $this->addSql('DROP INDEX IDX_848AA7C6D02563A3 ON crente');
        $this->addSql('ALTER TABLE crente DROP familia_id');
    }
}
