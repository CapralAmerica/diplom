<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180414160914 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE interview ADD question_1 VARCHAR(255) NOT NULL, ADD answer_1 VARCHAR(255) NOT NULL, ADD question_2 VARCHAR(255) NOT NULL, ADD answer_2 VARCHAR(255) NOT NULL, ADD question_3 VARCHAR(255) NOT NULL, ADD answer_3 VARCHAR(255) NOT NULL, ADD question_4 VARCHAR(255) NOT NULL, ADD answer_4 VARCHAR(255) NOT NULL, DROP question, DROP answer');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE interview ADD question VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD answer VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, DROP question_1, DROP answer_1, DROP question_2, DROP answer_2, DROP question_3, DROP answer_3, DROP question_4, DROP answer_4');
    }
}
