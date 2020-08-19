<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200810181159 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE competence (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, descriptif VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE group_competence (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, descriptif VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE group_competence_competence (group_competence_id INT NOT NULL, competence_id INT NOT NULL, INDEX IDX_C6C6E39E4A9FD3E9 (group_competence_id), INDEX IDX_C6C6E39E15761DAB (competence_id), PRIMARY KEY(group_competence_id, competence_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE niveau (id INT AUTO_INCREMENT NOT NULL, competence_id INT NOT NULL, libelle VARCHAR(255) NOT NULL, critere_deval VARCHAR(255) DEFAULT NULL, groupe_daction VARCHAR(255) DEFAULT NULL, INDEX IDX_4BDFF36B15761DAB (competence_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE group_competence_competence ADD CONSTRAINT FK_C6C6E39E4A9FD3E9 FOREIGN KEY (group_competence_id) REFERENCES group_competence (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE group_competence_competence ADD CONSTRAINT FK_C6C6E39E15761DAB FOREIGN KEY (competence_id) REFERENCES competence (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE niveau ADD CONSTRAINT FK_4BDFF36B15761DAB FOREIGN KEY (competence_id) REFERENCES competence (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE group_competence_competence DROP FOREIGN KEY FK_C6C6E39E15761DAB');
        $this->addSql('ALTER TABLE niveau DROP FOREIGN KEY FK_4BDFF36B15761DAB');
        $this->addSql('ALTER TABLE group_competence_competence DROP FOREIGN KEY FK_C6C6E39E4A9FD3E9');
        $this->addSql('DROP TABLE competence');
        $this->addSql('DROP TABLE group_competence');
        $this->addSql('DROP TABLE group_competence_competence');
        $this->addSql('DROP TABLE niveau');
    }
}
