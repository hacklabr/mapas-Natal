# ADR-0006 — Isolar cache e sessões em serviços Redis separados

**Status:** Current  
**Date:** 2026-08-21  
**Round:** setup

## Contexto

Cache e sessões têm perfis de acesso e requisitos de persistência diferentes. Sessões precisam ser duráveis (volume montado), enquanto cache pode ser regenerado.

## Decisão

Executar dois serviços Redis: `redis` para cache com `maxmemory 1256Mb allkeys-lru`, e `sessions` para sessões com `maxmemory 384Mb allkeys-lru` e volume persistente em `./docker-data/sessions`.

## Consequências

- **Positivas:** isolamento de carga; políticas de memória e persistência distintas para cada função.
- **Negativas:** aumenta o número de serviços a monitorar; configuração de backup deve cobrir o volume de sessões.
