# Runbook — Rollback

> Criado em: 2026-08-21 · Última revisão: 2026-08-21
> Regra: doc desatualizado é corrigido ou marcado como obsoleto — nunca deixado apodrecendo em silêncio.

## Propósito

Reverter o ambiente de homologação/produção para uma versão anterior estável.

## Pré-condições

- [ ] A versão anterior está identificada e tagueada.
- [ ] O banco de dados pode ser restaurado a partir do backup pré-deploy.

## Procedimento

1. Pare os containers: `docker compose down`.
2. Restaure o banco de dados a partir do backup mais recente anterior ao deploy.
3. Restaure os arquivos persistentes (`docker-data/`) se necessário.
4. Faça checkout da tag anterior: `git checkout <tag-anterior>`.
5. Atualize os submódulos: `git submodule update --init --recursive`.
6. Reconstrua e reinicie: `docker compose up -d --build`.
7. Verifique a funcionalidade crítica (login, home, busca).

## Rollback deste runbook

Não se aplica — este é o próprio rollback. Se falhar, acione o runbook de incidentes.
