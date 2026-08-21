# ADR-0001 — Fixar core Mapas Culturais na versão 7.8.6

**Status:** Current  
**Date:** 2026-08-21  
**Round:** setup

## Contexto

O projeto é uma customização municipal do Mapas Culturais. É necessário garantir que o ambiente de desenvolvimento, homologação e produção executem a mesma versão do core, com comportamento previsível e reprodutível.

## Decisão

Fixar a imagem base em `hacklab/mapasculturais:7.8.6` no `docker/Dockerfile`. Upgrades de patch, minor ou major seguem o versionamento semântico do ambiente e são tratados como mudanças planejadas.

## Consequências

- **Positivas:** estabilidade, reprodutibilidade e controle de versão do core.
- **Negativas:** upgrades de versão exigem planejamento; correções de segurança urgentes do core dependem de uma nova imagem oficial.
