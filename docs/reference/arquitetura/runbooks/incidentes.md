# Runbook — Incidentes

> Criado em: 2026-08-21 · Última revisão: 2026-08-21
> Regra: doc desatualizado é corrigido ou marcado como obsoleto — nunca deixado apodrecendo em silêncio.

## Propósito

Orientar a resposta a incidentes em produção do Mapas Natal.

## Pré-condições

- [ ] Acesso ao host de produção.
- [ ] Acesso aos logs (`docker-data/logs/` ou `docker compose logs`).

## Procedimento

1. **Detectar:** verifique se o site está fora do ar ou apresentando erro.
2. **Isolar:** identifique se o incidente é infraestrutura (Docker, nginx, banco), aplicação (Mapas Culturais, tema, plugins) ou dados.
3. **Comunicar:** notifique as partes interessadas.
4. **Mitigar:** se possível, aplique rollback para a última versão estável.
5. **Diagnosticar:** colete logs relevantes e reproduza o problema em desenvolvimento.
6. **Resolver:** aplique a correção e valide.
7. **Registrar:** documente a causa raiz e ações tomadas na retrospectiva da rodada.

## Rollback deste runbook

Se a mitigação exigir reversão, execute `runbooks/rollback.md`.
