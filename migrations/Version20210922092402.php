<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210922092402 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article ADD users_id INT DEFAULT NULL, ADD themes_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E6667B3B43D FOREIGN KEY (users_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E6694F4A9D2 FOREIGN KEY (themes_id) REFERENCES themes (id)');
        $this->addSql('CREATE INDEX IDX_23A0E6667B3B43D ON article (users_id)');
        $this->addSql('CREATE INDEX IDX_23A0E6694F4A9D2 ON article (themes_id)');
        $this->addSql('ALTER TABLE commentary ADD article_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commentary ADD CONSTRAINT FK_1CAC12CA7294869C FOREIGN KEY (article_id) REFERENCES article (id)');
        $this->addSql('CREATE INDEX IDX_1CAC12CA7294869C ON commentary (article_id)');
        $this->addSql('ALTER TABLE files ADD users_id INT DEFAULT NULL, ADD article_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE files ADD CONSTRAINT FK_635405967B3B43D FOREIGN KEY (users_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE files ADD CONSTRAINT FK_63540597294869C FOREIGN KEY (article_id) REFERENCES article (id)');
        $this->addSql('CREATE INDEX IDX_635405967B3B43D ON files (users_id)');
        $this->addSql('CREATE INDEX IDX_63540597294869C ON files (article_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E6667B3B43D');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E6694F4A9D2');
        $this->addSql('DROP INDEX IDX_23A0E6667B3B43D ON article');
        $this->addSql('DROP INDEX IDX_23A0E6694F4A9D2 ON article');
        $this->addSql('ALTER TABLE article DROP users_id, DROP themes_id');
        $this->addSql('ALTER TABLE commentary DROP FOREIGN KEY FK_1CAC12CA7294869C');
        $this->addSql('DROP INDEX IDX_1CAC12CA7294869C ON commentary');
        $this->addSql('ALTER TABLE commentary DROP article_id');
        $this->addSql('ALTER TABLE files DROP FOREIGN KEY FK_635405967B3B43D');
        $this->addSql('ALTER TABLE files DROP FOREIGN KEY FK_63540597294869C');
        $this->addSql('DROP INDEX IDX_635405967B3B43D ON files');
        $this->addSql('DROP INDEX IDX_63540597294869C ON files');
        $this->addSql('ALTER TABLE files DROP users_id, DROP article_id');
    }
}
