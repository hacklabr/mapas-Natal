# ADR-0005 — Usar certificado SSL institucional da ATI de Natal em vez de Let's Encrypt

**Status:** Current  
**Date:** 2026-08-21  
**Round:** setup

## Contexto

A prefeitura de Natal possui certificado SSL institucional emitido pela ATI. O nginx de produção precisa servir o site via HTTPS com um certificado válido para o domínio municipal.

## Decisão

Utilizar o certificado da ATI de Natal montado via volume em `./Certificado/:/dados/mapasculturais/Certificado` e configurado em `docker/production/nginx-ssl.conf`. Não usar Let's Encrypt/Certbot como caminho padrão.

## Consequências

- **Positivas:** elimina dependência de renovação automática externa; atende requisitos institucionais.
- **Negativas:** renovação é manual; o diretório `./Certificado/` não está versionado e precisa estar presente no host de produção.
