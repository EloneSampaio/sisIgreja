<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180115054114 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE crente CHANGE estado_civil estado_civil VARCHAR(100) DEFAULT NULL, CHANGE numero_de_filhos numero_de_filhos INT DEFAULT NULL, CHANGE profissao profissao VARCHAR(100) DEFAULT NULL, CHANGE status_trabalho status_trabalho VARCHAR(100) DEFAULT NULL, CHANGE grau_academico grau_academico VARCHAR(100) DEFAULT NULL, CHANGE dizimista dizimista VARCHAR(100) DEFAULT NULL, CHANGE cargo_igreja cargo_igreja VARCHAR(100) DEFAULT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE crente CHANGE estado_civil estado_civil VARCHAR(100) NOT NULL COLLATE utf8_unicode_ci, CHANGE numero_de_filhos numero_de_filhos INT NOT NULL, CHANGE profissao profissao VARCHAR(100) NOT NULL COLLATE utf8_unicode_ci, CHANGE status_trabalho status_trabalho VARCHAR(100) NOT NULL COLLATE utf8_unicode_ci, CHANGE grau_academico grau_academico VARCHAR(100) NOT NULL COLLATE utf8_unicode_ci, CHANGE dizimista dizimista VARCHAR(100) NOT NULL COLLATE utf8_unicode_ci, CHANGE cargo_igreja cargo_igreja VARCHAR(100) NOT NULL COLLATE utf8_unicode_ci');
    }
}
