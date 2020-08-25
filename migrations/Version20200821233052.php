<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200821233052 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE brief_ma_promo (id INT AUTO_INCREMENT NOT NULL, brief_id INT DEFAULT NULL, INDEX IDX_6E0C4800757FABFF (brief_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etat_brief_groupe (id INT AUTO_INCREMENT NOT NULL, statut VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE brief_ma_promo ADD CONSTRAINT FK_6E0C4800757FABFF FOREIGN KEY (brief_id) REFERENCES brief (id)');
        $this->addSql('ALTER TABLE brief ADD etat_brief_groupe_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE brief ADD CONSTRAINT FK_1FBB10077777C7A0 FOREIGN KEY (etat_brief_groupe_id) REFERENCES etat_brief_groupe (id)');
        $this->addSql('CREATE INDEX IDX_1FBB10077777C7A0 ON brief (etat_brief_groupe_id)');
        $this->addSql('ALTER TABLE group_promo ADD etat_brief_groupe_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE group_promo ADD CONSTRAINT FK_E03FB19C7777C7A0 FOREIGN KEY (etat_brief_groupe_id) REFERENCES etat_brief_groupe (id)');
        $this->addSql('CREATE INDEX IDX_E03FB19C7777C7A0 ON group_promo (etat_brief_groupe_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE brief DROP FOREIGN KEY FK_1FBB10077777C7A0');
        $this->addSql('ALTER TABLE group_promo DROP FOREIGN KEY FK_E03FB19C7777C7A0');
        $this->addSql('DROP TABLE brief_ma_promo');
        $this->addSql('DROP TABLE etat_brief_groupe');
        $this->addSql('DROP INDEX IDX_1FBB10077777C7A0 ON brief');
        $this->addSql('ALTER TABLE brief DROP etat_brief_groupe_id');
        $this->addSql('DROP INDEX IDX_E03FB19C7777C7A0 ON group_promo');
        $this->addSql('ALTER TABLE group_promo DROP etat_brief_groupe_id');
    }
}
