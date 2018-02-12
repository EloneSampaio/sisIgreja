<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180211021456 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE fornecedor (id INT AUTO_INCREMENT NOT NULL, nome VARCHAR(100) NOT NULL, endereco VARCHAR(100) NOT NULL, telefone VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE crente_cargo');
        $this->addSql('DROP TABLE crente_funcao');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE crente_cargo (crente_id INT NOT NULL, cargo_id INT NOT NULL, INDEX IDX_D0B8E0C11F486F56 (crente_id), INDEX IDX_D0B8E0C1813AC380 (cargo_id), PRIMARY KEY(crente_id, cargo_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE crente_funcao (crente_id INT NOT NULL, funcao_id INT NOT NULL, INDEX IDX_A55414061F486F56 (crente_id), INDEX IDX_A5541406263E9CB2 (funcao_id), PRIMARY KEY(crente_id, funcao_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE crente_cargo ADD CONSTRAINT FK_D0B8E0C11F486F56 FOREIGN KEY (crente_id) REFERENCES crente (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE crente_cargo ADD CONSTRAINT FK_D0B8E0C1813AC380 FOREIGN KEY (cargo_id) REFERENCES cargo (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE crente_funcao ADD CONSTRAINT FK_A55414061F486F56 FOREIGN KEY (crente_id) REFERENCES crente (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE crente_funcao ADD CONSTRAINT FK_A5541406263E9CB2 FOREIGN KEY (funcao_id) REFERENCES funcao (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE fornecedor');
    }
}
