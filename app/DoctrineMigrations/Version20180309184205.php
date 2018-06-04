<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180309184205 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, surname VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json_array)\', UNIQUE INDEX UNIQ_1483A5E9F85E0677 (username), UNIQUE INDEX UNIQ_1483A5E9E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE orders (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, service_id INT DEFAULT NULL, time DATETIME NOT NULL, INDEX IDX_E52FFDEEA76ED395 (user_id), UNIQUE INDEX UNIQ_E52FFDEEED5CA9E6 (service_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE competitors_items (id INT AUTO_INCREMENT NOT NULL, competitor_id INT DEFAULT NULL, item VARCHAR(255) NOT NULL, price NUMERIC(10, 2) NOT NULL, INDEX IDX_80047BE578A5D405 (competitor_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE services_items (competitors_items_id INT NOT NULL, service_id INT NOT NULL, INDEX IDX_5DFC530F2CEB3DF (competitors_items_id), INDEX IDX_5DFC530FED5CA9E6 (service_id), PRIMARY KEY(competitors_items_id, service_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service (id INT AUTO_INCREMENT NOT NULL, short_name VARCHAR(255) NOT NULL, full_name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, price NUMERIC(10, 2) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service_competitors_items (service_id INT NOT NULL, competitors_items_id INT NOT NULL, INDEX IDX_EA131E30ED5CA9E6 (service_id), INDEX IDX_EA131E302CEB3DF (competitors_items_id), PRIMARY KEY(service_id, competitors_items_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE competitors (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, url VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEEA76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEEED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id)');
        $this->addSql('ALTER TABLE competitors_items ADD CONSTRAINT FK_80047BE578A5D405 FOREIGN KEY (competitor_id) REFERENCES competitors (id)');
        $this->addSql('ALTER TABLE services_items ADD CONSTRAINT FK_5DFC530F2CEB3DF FOREIGN KEY (competitors_items_id) REFERENCES competitors_items (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE services_items ADD CONSTRAINT FK_5DFC530FED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE service_competitors_items ADD CONSTRAINT FK_EA131E30ED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE service_competitors_items ADD CONSTRAINT FK_EA131E302CEB3DF FOREIGN KEY (competitors_items_id) REFERENCES competitors_items (id) ON DELETE CASCADE');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE orders DROP FOREIGN KEY FK_E52FFDEEA76ED395');
        $this->addSql('ALTER TABLE services_items DROP FOREIGN KEY FK_5DFC530F2CEB3DF');
        $this->addSql('ALTER TABLE service_competitors_items DROP FOREIGN KEY FK_EA131E302CEB3DF');
        $this->addSql('ALTER TABLE orders DROP FOREIGN KEY FK_E52FFDEEED5CA9E6');
        $this->addSql('ALTER TABLE services_items DROP FOREIGN KEY FK_5DFC530FED5CA9E6');
        $this->addSql('ALTER TABLE service_competitors_items DROP FOREIGN KEY FK_EA131E30ED5CA9E6');
        $this->addSql('ALTER TABLE competitors_items DROP FOREIGN KEY FK_80047BE578A5D405');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE orders');
        $this->addSql('DROP TABLE competitors_items');
        $this->addSql('DROP TABLE services_items');
        $this->addSql('DROP TABLE service');
        $this->addSql('DROP TABLE service_competitors_items');
        $this->addSql('DROP TABLE competitors');
    }
}
