<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\OXM;

/**
 * Container for all OXM events.
 *
 * This class cannot be instantiated.
 */
final class Events
{
    private function __construct() {}

    /**
     * The preRemove event occurs for a given document before the respective
     * DocumentManager remove operation for that document is executed.
     *
     * This is an document lifecycle event.
     *
     * @var string
     */
    const preRemove = 'preRemove';

    /**
     * The postRemove event occurs for an document after the document has
     * been deleted. It will be invoked after the database delete operations.
     *
     * This is an document lifecycle event.
     *
     * @var string
     */
    const postRemove = 'postRemove';

    /**
     * The prePersist event occurs for a given document before the respective
     * DocumentManager persist operation for that document is executed.
     *
     * This is an document lifecycle event.
     *
     * @var string
     */
    const prePersist = 'prePersist';

    /**
     * The postPersist event occurs for an document after the document has
     * been made persistent. It will be invoked after the database insert operations.
     * Generated primary key values are available in the postPersist event.
     *
     * This is an document lifecycle event.
     *
     * @var string
     */
    const postPersist = 'postPersist';

    /**
     * The preUpdate event occurs before the database update operations to
     * document data.
     *
     * This is an document lifecycle event.
     *
     * @var string
     */
    const preUpdate = 'preUpdate';

    /**
     * The postUpdate event occurs after the database update operations to
     * document data.
     *
     * This is an document lifecycle event.
     *
     * @var string
     */
    const postUpdate = 'postUpdate';

    /**
     * The preLoad event occurs for a document before the document has been loaded
     * into the current DocumentManager from the database or before the refresh operation
     * has been applied to it.
     *
     * This is a document lifecycle event.
     *
     * @var string
     */
    const preLoad = 'preLoad';

    /**
     * The postLoad event occurs for a document after the document has been loaded
     * into the current DocumentManager from the database or after the refresh operation
     * has been applied to it.
     *
     * Note that the postLoad event occurs for an document before any associations have been
     * initialized. Therefore it is not safe to access associations in a postLoad callback
     * or event handler.
     *
     * This is a document lifecycle event.
     *
     * @var string
     */
    const postLoad = 'postLoad';

    /**
     * The preMarshal event occurs for a given xml entity before the respective
     * Marshaller marshal operation for that entity is executed.
     * 
     * This is an xml entity lifecycle event.
     * 
     * @var string
     */
    const preMarshal = 'preMarshal';
    
    /**
     * The postMarshal event occurs for an entity after the entity has
     * been marshalled. It will be invoked after the Marshaller has completed
     * marshalling.
     * 
     * This is an entity lifecycle event.
     * 
     * @var string
     */
    const postMarshal = 'postMarshal';

    /**
     * The preUnmarshal event occurs for a given entity before the respective
     * Marshaller unmarshal operation for that entity is executed.
     * 
     * This is an entity lifecycle event.
     * 
     * @var string
     */
    const preUnmarshal = 'preUnmarshal';

    /**
     * The postUnmarshal event occurs for an entity after the entity has
     * been unmarshalled. It will be invoked after the Marshaller unmarshals xml
     * to the entity.
     * 
     * This is an entity lifecycle event.
     * 
     * @var string
     */
    const postUnmarshal = 'postUnmarshal';

    /**
     * The loadClassMetadata event occurs after the mapping metadata for a class
     * has been loaded from a mapping source (annotations/xml/yaml).
     * 
     * @var string
     */
    const loadClassMetadata = 'loadClassMetadata';

    /**
     * The onFlush event occurs when the DocumentManager#flush() operation is invoked,
     * after any changes to managed documents have been determined but before any
     * actual database operations are executed. The event is only raised if there is
     * actually something to do for the underlying UnitOfWork. If nothing needs to be done,
     * the onFlush event is not raised.
     *
     * @var string
     */
    const onFlush = 'onFlush';
}
