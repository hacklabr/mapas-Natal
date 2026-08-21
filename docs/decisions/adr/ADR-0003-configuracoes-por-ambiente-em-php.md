# ADR-0003 — Separar configurações por ambiente em arquivos PHP

**Status:** Current  
**Date:** 2026-08-21  
**Round:** setup

## Contexto

O Mapas Culturais carrega configurações a partir de arquivos PHP que retornam arrays, localizados em diretórios como `config/common.d`, `config/config.d` e `config/prod.d`. O projeto precisa de configurações distintas para desenvolvimento e produção.

## Decisão

Manter configurações comuns em `docker/common/config.d/`, configurações exclusivas de produção em `docker/production/config.d/` e configurações de desenvolvimento em `dev/config.d/`. Cada arquivo PHP retorna um array associativo.

## Consequências

- **Positivas:** sobreposição clara de configurações; fácil comparar ambientes.
- **Negativas:** a ordem de carregamento e merge de arrays depende do core; desenvolvedores precisam conhecer a precedência entre `common.d`, `prod.d` e `local.d`.
