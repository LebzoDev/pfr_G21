<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200813181616 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE group_promo (id INT AUTO_INCREMENT NOT NULL, formateur_id INT DEFAULT NULL, promo_id INT NOT NULL, nom VARCHAR(255) NOT NULL, date_creation DATE NOT NULL, INDEX IDX_E03FB19C155D8F51 (formateur_id), INDEX IDX_E03FB19CD0C07AFF (promo_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE group_promo_apprenant (group_promo_id INT NOT NULL, apprenant_id INT NOT NULL, INDEX IDX_52B2BC4CD9F03680 (group_promo_id), INDEX IDX_52B2BC4CC5697D6D (apprenant_id), PRIMARY KEY(group_promo_id, apprenant_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE promo (id INT AUTO_INCREMENT NOT NULL, referentiel_id INT NOT NULL, lieu VARCHAR(255) DEFAULT NULL, reference_agate VARCHAR(255) NOT NULL, fabrique VARCHAR(255) NOT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, langue VARCHAR(255) NOT NULL, descrpition VARCHAR(255) NOT NULL, titre VARCHAR(255) NOT NULL, avatar LONGBLOB DEFAULT NULL, INDEX IDX_B0139AFB805DB139 (referentiel_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE referentiel (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, presentation VARCHAR(255) NOT NULL, programme VARCHAR(255) DEFAULT NULL, critere_dev VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE referentiel_competence (referentiel_id INT NOT NULL, competence_id INT NOT NULL, INDEX IDX_2377878B805DB139 (referentiel_id), INDEX IDX_2377878B15761DAB (competence_id), PRIMARY KEY(referentiel_id, competence_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE group_promo ADD CONSTRAINT FK_E03FB19C155D8F51 FOREIGN KEY (formateur_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE group_promo ADD CONSTRAINT FK_E03FB19CD0C07AFF FOREIGN KEY (promo_id) REFERENCES promo (id)');
        $this->addSql('ALTER TABLE group_promo_apprenant ADD CONSTRAINT FK_52B2BC4CD9F03680 FOREIGN KEY (group_promo_id) REFERENCES group_promo (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE group_promo_apprenant ADD CONSTRAINT FK_52B2BC4CC5697D6D FOREIGN KEY (apprenant_id) REFERENCES apprenant (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE promo ADD CONSTRAINT FK_B0139AFB805DB139 FOREIGN KEY (referentiel_id) REFERENCES referentiel (id)');
        $this->addSql('ALTER TABLE referentiel_competence ADD CONSTRAINT FK_2377878B805DB139 FOREIGN KEY (referentiel_id) REFERENCES referentiel (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE referentiel_competence ADD CONSTRAINT FK_2377878B15761DAB FOREIGN KEY (competence_id) REFERENCES competence (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE competence CHANGE archive archive TINYINT(1) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE group_promo_apprenant DROP FOREIGN KEY FK_52B2BC4CD9F03680');
        $this->addSql('ALTER TABLE group_promo DROP FOREIGN KEY FK_E03FB19CD0C07AFF');
        $this->addSql('ALTER TABLE promo DROP FOREIGN KEY FK_B0139AFB805DB139');
        $this->addSql('ALTER TABLE referentiel_competence DROP FOREIGN KEY FK_2377878B805DB139');
        $this->addSql('DROP TABLE group_promo');
        $this->addSql('DROP TABLE group_promo_apprenant');
        $this->addSql('DROP TABLE promo');
        $this->addSql('DROP TABLE referentiel');
        $this->addSql('DROP TABLE referentiel_competence');
        $this->addSql('ALTER TABLE competence CHANGE archive archive TINYINT(1) NOT NULL');
    }
}
