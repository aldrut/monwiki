<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210921135428 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users ADD subdate DATETIME DEFAULT NULL, ADD imgsrc VARCHAR(255) DEFAULT NULL, ADD nbquestion INT DEFAULT NULL, DROP sub_date, DROP img_src, DROP nb_question, CHANGE pwd pwd VARCHAR(255) DEFAULT NULL, CHANGE first_name firstname VARCHAR(255) NOT NULL, CHANGE nb_response nbresponse INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users ADD sub_date DATETIME NOT NULL, ADD img_src LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, ADD nb_response INT DEFAULT NULL, ADD nb_question INT NOT NULL, DROP subdate, DROP imgsrc, DROP nbresponse, DROP nbquestion, CHANGE pwd pwd VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE firstname first_name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
