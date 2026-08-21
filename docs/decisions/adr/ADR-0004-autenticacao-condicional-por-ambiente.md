# ADR-0004 — Autenticação Fake em dev e MultipleLocalAuth+OAuth em produção

**Status:** Current  
**Date:** 2026-08-21  
**Round:** setup

## Contexto

Em produção o sistema deve oferecer autenticação robusta com múltiplos provedores OAuth. Em desenvolvimento, configurar credenciais reais de OAuth para cada desenvolvedor é inviável.

## Decisão

Em desenvolvimento (`dev/config.d/auth.php`) usar o provedor `Fake` do Mapas Culturais. Em produção (`docker/production/config.d/authentication.php`) usar `\MultipleLocalAuth\Provider` com estratégias OAuth para Facebook, LinkedIn, Google e Twitter.

## Consequências

- **Positivas:** desenvolvimento local simplificado; autenticação real e segura em produção.
- **Negativas:** diferença comportamental entre ambientes pode mascarar bugs de login social; testes de integração com OAuth exigem ambiente de homologação configurado.
