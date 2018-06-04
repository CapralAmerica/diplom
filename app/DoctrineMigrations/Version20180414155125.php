<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180414155125 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE interview DROP FOREIGN KEY FK_CF1D3C34A76ED395');
        $this->addSql('DROP INDEX UNIQ_CF1D3C34A76ED395 ON interview');
        $this->addSql('ALTER TABLE interview ADD question VARCHAR(255) NOT NULL, ADD answer VARCHAR(255) NOT NULL, DROP user_id, DROP question_1, DROP answer_1, DROP question_2, DROP answer_2, DROP question_3, DROP answer_3, DROP question_4, DROP answer_4');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE interview ADD user_id INT DEFAULT NULL, ADD question_1 VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD answer_1 VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD question_2 VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD answer_2 VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD question_3 VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD answer_3 VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD question_4 VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD answer_4 VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, DROP question, DROP answer');
        $this->addSql('ALTER TABLE interview ADD CONSTRAINT FK_CF1D3C34A76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_CF1D3C34A76ED395 ON interview (user_id)');
    }
}
