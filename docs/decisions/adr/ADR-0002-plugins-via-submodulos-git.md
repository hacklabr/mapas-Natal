# ADR-0002 — Gerenciar plugins externos via submódulos git

**Status:** Current  
**Date:** 2026-08-21  
**Round:** setup

## Contexto

O projeto utiliza plugins mantidos pela comunidade Mapas Culturais (MultipleLocalAuth, Analytics, AdminLoginAsUser, MapasBlame, SpamDetector, Zammad, ValuersManagement). É preciso versionar quais plugins e em quais versões são usados, sem misturar seus históricos com o do projeto principal.

## Decisão

Cada plugin externo é referenciado como submódulo git em `plugins/<nome>`. O `update.sh` executa `git pull --recurse-submodules` para atualizar o ambiente.

## Consequências

- **Positivas:** versionamento independente de cada plugin; histórico do projeto principal permanece limpo.
- **Negativas:** clones não recursivos deixam os diretórios vazios; todos os desenvolvedores precisam inicializar os submódulos (`git submodule update --init --recursive`).
